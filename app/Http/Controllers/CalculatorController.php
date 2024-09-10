<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculatorPage(){
        return view('mypages.calculator' ,[
            'result' => null,
        ]);
    }
    public function calculates(Request $request){
        $request->validate([
            'number1' => 'numeric',
            'number2' =>  'numeric',
        ]);
        // $validatedData = $request->validate([
        //     'number1' => 'numeric',
        //     'number2' =>  'numeric',
        // ]);
        $num1 = $request ->input('number1');
        $num2 = $request ->input('number2');


       
        $result = $num1 + $num2;

        return view('mypages.calculator', [
            'result' => $result,
        ]);
    }
}
