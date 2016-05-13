<?php
namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class BreakfastController extends Controller {

    /**
    * main page of p4
    */
    public function getIndex() {
        $foods = \p4\Food::where('type', '=', 'Breakfast')->get();
        return view('menu.breakfast')->with('foods', $foods);
    }
}

?>
