<?php
namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class OurstoryController extends Controller {

    /**
    * main page of p4
    */
    public function index() {
        return view('ourstory.ourstory');
    }
}

?>