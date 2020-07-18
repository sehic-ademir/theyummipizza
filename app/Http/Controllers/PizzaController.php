<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller {

    public function index(Request $request){
        $pizzas = \DB::table('pizzas')->get();
        return response()->json($pizzas);
    }
    public function getById($id){
        $pizza = \DB::table('pizzas')->find($id);
        return response()->json($pizza);
    }

}
