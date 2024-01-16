<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;
use DOMDocument;
use DOMXPath;

class VeiculoController extends Controller {

    public function viewResultVeiculo($placa){
        return view('resultVeiculo', ['placa' => $placa]);
    }    

    

    public function dadosVeiculoByPlaca(Request $request) {
        Log::info($request);
        $placa = $request['Placa'];

        $url = "https://placafipe.com/placa/$placa";
        $options = [
            'http' => [
                'header' => 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3',
            ],
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            // Handle error
            Log::info("Error accessing the URL");
        } else {
            preg_match('/<table class="fipeTablePriceDetail">(.*?)<\/table>/s', $result, $matches);
            $tableHtml = $matches[0];
        
            // Break the table into separate <td> elements
            $tdElements = explode('<td>', $tableHtml);
        
            $data = [
                'marca' => trim(strip_tags($tdElements[1])),
                'modelo' => trim(strip_tags($tdElements[3])),
                'importado' => trim(strip_tags($tdElements[5])),
                'anoFab' => trim(strip_tags($tdElements[7])),
                'anoModelo' => trim(strip_tags($tdElements[9])),
                'cor' => trim(strip_tags($tdElements[11])),
                'potencia' => trim(strip_tags($tdElements[15])),
                'combustivel' => trim(strip_tags($tdElements[17])),
                'chassi' => trim(strip_tags($tdElements[19])),
                'passageiros' =>trim(strip_tags($tdElements[23])),
                'uf' => trim(strip_tags($tdElements[25])),
                'municipio' => trim(strip_tags($tdElements[27])),
            ];
        
            Log::info($data);
        
            return response()->json(['data' => $data], 200);
        }
    }
}
