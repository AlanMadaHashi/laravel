<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorContrller extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'fornecedores',
                'status' => 'N',
                'cnpj' => '16.268.769/0001-25',
                'ddd' => '13', //Baixada Santista
                'telefone' => '00000-0000'
            ],
            1 => [
                'nome' => 'fornecedores01',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '11', //São Paulo
                'telefone' => '00000-0000'

            ],
            2 => [
                'nome' => 'fornecedores02',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza
                'telefone' => '00000-0000'

            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
        // return view('app.fornecedor.index');
    }
}
