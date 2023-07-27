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

        $balance = $moneyins->concat($moneyouts)->sortByDesc('created_at');
        $total = $balance->sum('amount');

        return view('balance.index', compact('balance','total'));
    }
}
