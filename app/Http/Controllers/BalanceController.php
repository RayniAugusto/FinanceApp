<?php

namespace App\Http\Controllers;

use App\Models\MoneyOut;
use App\Models\MoneyIn;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id; // Obtener el ID del usuario actualmente autenticado

//            $moneyins = MoneyIn::where('user_id', $userId)->get();
//            $moneyouts = Moneyout::where('user_id', $userId)->get();

        $moneyins = MoneyIn::where('user_id', $userId)->get()->map(function ($moneyin) {
            $moneyin['transaction_type'] = 'In';
            return $moneyin;
        });

        $moneyouts = MoneyOut::where('user_id', $userId)->get()->map(function ($moneyout) {
            $moneyout['transaction_type'] = 'Out';
            return $moneyout;
        });

        $balance = $moneyins->concat($moneyouts)->sortBy('created_at');
        $total = $balance->sum('amount');

//            $balance = [
//                ['date' => '2023-08-01', 'tipo' => 'Ingreso', 'description' => 'Salario', 'amount' => 5000],
//                ['date' => '2023-08-02', 'tipo' => 'Egreso', 'description' => 'Alquiler', 'amount' => 1500],
//                ['date' => '2023-08-03', 'tipo' => 'Egreso', 'description' => 'Comida', 'amount' => 2000],
//            ];
        return view('balance.index', compact('balance','total'));
    }
}
