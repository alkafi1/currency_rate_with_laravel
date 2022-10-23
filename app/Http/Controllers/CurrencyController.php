<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\currencies_code;
use AmrShawky\LaravelCurrency\Facade\Currency;

class CurrencyController extends Controller
{
    function currency(){
        $currencies = currencies_code::all();
        
        // $converted = 'abac';
        //  if ($request->filled('from')) {
        //     $convertedObj = Currency::convert()
        //                 ->from($request->get('from'))
        //                 ->to($request->get('to'))
        //                 ->amount($request->get('amount'));

        //             if($request->filled('date')){
        //                 $convertedObj = $convertedObj->date($request->get('date'));
        //             }

        //     $converted = $convertedObj->get();
        // }
        return view('currency',[
            'currencies' => $currencies,
        ]);
    }
    function currency_post(Request $request){
        
        // return $request;
        Currency::rates()
            ->latest()
            ->get();
        $converted = Currency::convert()
            ->from($request->from)
            ->to($request->to)
            ->date($request->date)
            ->get();
        return back()->with('converted',$converted);
    }

}
