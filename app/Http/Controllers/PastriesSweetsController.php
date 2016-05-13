<?php
namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class PastriesSweetsController extends Controller {

    /**
    * main page of p4
    */
    public function getIndex() {
        $foods = \p4\Food::where('type', '=', 'Pastries and sweets')->get();
        return view('menu.pastriessweets')->with('foods', $foods);
    }
}

?>
