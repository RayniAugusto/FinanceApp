<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index()
        {
            $balance = [
                ['date' => '2023-08-01', 'tipo' => 'Ingreso', 'description' => 'Salario', 'amount' => 5000],
                ['date' => '2023-08-02', 'tipo' => 'Egreso', 'description' => 'Alquiler', 'amount' => 1500],
                ['date' => '2023-08-03', 'tipo' => 'Egreso', 'description' => 'Comida', 'amount' => 2000],
            ];
            return view('balance.index', compact('balance'));
        }
}
