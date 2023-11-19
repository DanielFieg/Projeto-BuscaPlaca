<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Website Title -->
    <title>InfoVeich</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<style>
.img-wrapper {
    overflow: hidden;
    border-radius: 10px;
}

</style>
<body data-spy="scroll" data-target=".fixed-top">
    
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <a class="navbar-brand logo-text page-scroll">InfoVeich</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#consulta">CONSULTA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contatos">CONTATO</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="log-in.html">LOG IN</a>
                </span>
            </div>
        </div>
    </nav>

    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>Consulta Veicular</h1>
                            <p class="p-large">O Sistema de Consulta Veicular InfoVeich busca não apenas fornecer informações, mas também oferecer tranquilidade aos consumidores, permitindo que eles façam escolhas informadas e seguras ao adquirir um veículo.</p>
                            <a class="btn-solid-lg page-scroll" href="#consulta">CONSULTAR PLACA</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="images/consultaVeic.jpg" alt="alternative">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#5f4def;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg>

     <div id="consulta" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Deseja fazer uma consulta de veículo pela placa?</h2>
                        <p>Saber o histórico do seu veículo nunca foi tão fácil! Basta inserir a placa e tenha acesso a uma variedade de informações valiosas. Consulte agora e esteja por dentro de todos os detalhes importantes para tomar decisões informadas sobre o seu veículo!</p>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="nemail" v-model="contato.Placa" required>
                            <label class="label-control" for="nemail">PLACA</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">CONSULTAR</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/placa.webp" alt="alternative">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="buscaPlaca">
        <div id="contatos" class="form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <div class="above-heading">CONTATO</div>
                            <h2> Ficou com alguma dúvida? Interessado em planos com mais consultas por um preço mais acessível? Entre em contato agora!</h2>

                            <!-- Newsletter Form -->
                            <form id="contato" data-toggle="validator" @submit.prevent="enviarContato" data-focus="false">
                                <div class="form-group">
                                    <input type="email" class="form-control-input" id="Nome" v-model="contato.Nome" required>
                                    <label class="label-control" for="Nome">Nome</label>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control-input" id="Telefone" v-model="contato.Telefone" required>
                                    <label class="label-control" for="Telefone">Telefone</label>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control-input" id="Email" v-model="contato.Email" required>
                                    <label class="label-control" for="Email">Email</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control-input" id="Mensagem" rows="5" v-model="contato.Mensagem" required></textarea>
                                    <label class="label-control" for="Mensagem">Mensagem</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control-submit-button">ENVIAR</button>
                                </div>
                                <div class="form-message">
                                    <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="icon-container">
                            <span class="fa-stack">
                                <a href="https://wa.link/29mf1n" target="_blank">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-whatsapp fa-stack-1x"></i>
                                </a>
                            </span>                        
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col first">
                            <h4>Sobre a InfoVeich</h4>
                            <p class="p-small">O Sistema de Consulta Veicular InfoVeich busca não apenas fornecer informações, mas também oferecer tranquilidade aos consumidores, permitindo que eles façam escolhas informadas e seguras ao adquirir um veículo.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-col last">
                            <h4>Contatos</h4>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li class="media">
                                    <i class="fas fa-envelope"></i>
                                    <div class="media-body"><a class="white">danielfiegenbaum@live.com</a> <i class="fas fa-phone"></i><a class="white" href="https://wa.link/29mf1n">  Telefone</a></div>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script><!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue-the-mask@0.11.1/dist/vue-the-mask.min.js"></script><!-- Vue Mask -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script>
        var app = new Vue({
            el: '#buscaPlaca',
            data: {
                contato: {
                    Nome: '',
                    Telefone: '',
                    Email: '',
                    Mensagem: ''
                }
            },
            methods: {
                enviarContato() {
                    axios.post('/saveContato', {
                        _token: '{{ csrf_token() }}',
                        Nome: this.contato.Nome,
                        Telefone: this.contato.Telefone,
                        Email: this.contato.Email,
                        Mensagem: this.contato.Mensagem,
					})
					.then(response => {
                        console.log(response);
						if (response.status === 200) {
                            // Handle the server response here
                            console.log('Server response:', response.data);
                            // You can also reset the form after successful submission
                            this.resetForm();
							Swal.fire({
								title: "Contato Enviado!",
								text: "Seu contato foi enviado, entraremos em contato assim que possível!",
								icon: "success"
							});
						} else {
                            Swal.fire({
								title: "Erro ao enviar contato!",
								text: "Ocorreu algum erro ao enviar o contato, tente novamente!",
								icon: "error"
							});
                        }
					})
					.catch(error => {
						console.error(error);
					});
                },
                resetForm() {
                    // Reset the form data
                    this.contato = {
                        Nome: '',
                        Telefone: '',
                        Email: '',
                        Mensagem: ''
                    };
                }
            }
        });
    </script>
</body>
</html>