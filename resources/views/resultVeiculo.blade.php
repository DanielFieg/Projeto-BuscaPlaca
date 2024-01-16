<style>
	.fancybox {
		border-radius: 10px; /* Adjust the border-radius value to make it more or less rounded */
		max-width: 500px; /* Adjust the max-width to make it larger or smaller */
		margin: 20px auto; /* Center the Fancybox on the page */
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
	}

	.list-group-item {
		border-radius: 8px; /* Adjust the border-radius value for list items */
	}
</style>

<div id="infoVeich" class="fancybox clearfix">
	<div v-if="loading" class="spinner-wrapper">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	
	<div v-else>
		<h3 class="page-title">Informaçõe sobre o veículo</h3>
		<ul class="list-group list-group-flush">
			<li href="#" class="list-group-item list-group-item-action">Marca: @{{ marca }}</li>
			<li href="#" class="list-group-item list-group-item-action">Modelo: @{{ modelo }}</li>
			<li href="#" class="list-group-item list-group-item-action">Ano Fabricação: @{{ anoFab }}</li>
			<li href="#" class="list-group-item list-group-item-action">Ano Modelo: @{{ anoModelo }}</li>
			<li href="#" class="list-group-item list-group-item-action">Cor: @{{ cor }}</li>
			<li href="#" class="list-group-item list-group-item-action">Combustível: @{{ combustivel }}</li>
			<li href="#" class="list-group-item list-group-item-action">Chassi: @{{ chassi }}</li>
			<li href="#" class="list-group-item list-group-item-action">UF: @{{ uf }}</li>
			<li href="#" class="list-group-item list-group-item-action">Municipio: @{{ municipio }}</li>
		</ul>
		<div class="alert alert-primary" style="margin-top: 30px;" role="alert">
			Consulte nossos planos para realizar buscas mais completas!
		</div>
		<div class="form-group" style="margin-top: 10px;"> <!-- Ajuste o valor conforme necessário -->
			<button type="button" class="btn btn-outline-primary btn-lg btn-block">
				<span>Gerar a consulta completa <i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
			</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	placa = '{{ $placa }}';
	console.log(placa);
	new Vue({
		el: '#infoVeich',
		data: {
			placa: '{{ $placa }}',
			marca: '',
			modelo: '',
			anoFab: '',
			anoModelo: '',
			chassi: '',
			combustivel: '',
			uf: '',
			cor: '',
			municipio: '',
			loading: true,
		},
		methods: {
			fetchData: function () {
				axios.post('/dadosVeiculoByPlaca', {
						_token: '{{ csrf_token() }}',
						Placa: this.placa,
						
					})
					.then(response => {
						console.log(response);
						if (response.status === 200) {
							const responseData = response.data.data;

							console.log("Received data:", responseData);

							// Update component's data properties with received data
							this.marca = responseData.marca;
							this.modelo = responseData.modelo;
							this.anoFab = responseData.anoFab;
							this.anoModelo = responseData.anoModelo
							this.chassi = responseData.chassi;
							this.combustivel = responseData.combustivel;
							this.cor = responseData.cor;
							this.uf = responseData.uf;
							this.municipio = responseData.municipio;
							this.loading = false;
						} else {
							Swal.fire({
								title: "Erro ao Processar Dados!",
								text: "Ocorreu algum erro ao processar os dados do veículo!",
								icon: "error",
							});
						}
					})
					.catch(error => {
						console.error(error);
					});
			},
		},
		mounted: function () {
			this.fetchData();
		}
	});

</script>
