<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

class ContatoController extends Controller
{
    public function saveContato(Request $request) {

        $contato = Contato::create([
            'Nome' => $request->input('Nome'),
            'Telefone' => $request->input('Telefone'),
            'Email' => $request->input('Email'),
            'Mensagem' => $request->input('Mensagem'),
        ]);

        // Log the created contato
        Log::info($contato);

        // You can return a response as needed
        return response()->json(['success' => true]);
    }
}
