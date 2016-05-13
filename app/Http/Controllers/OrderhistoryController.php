<?php
namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class OrderhistoryController extends Controller {

    /**
    * main page of p4
    */
    public function getIndex() {
        $login_user_id = \Auth::id();
        $orders = \p4\Order::where('user_id', '=', $login_user_id)->get();
        return view('menu.orderhistory')->with('orders', $orders);
    }
}

?>
