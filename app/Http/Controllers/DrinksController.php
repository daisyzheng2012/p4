<?php
namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class DrinksController extends Controller {

    /**
    * main page of p4
    */
    public function getIndex() {
        $foods = \p4\Food::where('type', '=', 'Drinks')->get();
        return view('menu.drinks')->with('foods', $foods);
    }
}

?>
