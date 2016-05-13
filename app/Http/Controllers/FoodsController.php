<?php
namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodsController extends Controller {

    protected $request;

    public function __construct(\Illuminate\Http\Request $request){
       $this->request = $request;
    }

    /**
    * main page of p4
    */
    public function getIndex() {
        $foods = \p4\Food::all();
        return view('menu.foods')->with('foods', $foods);
    }

    public function postCheckout(Request $request) {
        // dump($request);
        $input = $this->request->all();
        echo \Auth::id();
        $data['user_id'] = \Auth::id();
        $data['user_name'] = \Auth::user()->name;
        $info = array();
        foreach($input as $key=>$value) {
            if ($key != '_token'){
                // array_push($info, $key);
                array_push($info, $value);
            }
        }
        // dump($info);
        $data['orderinfo'] = join(",", $info);
        // $data['orderinfo'] = $input;
        $order = new \p4\Order($data);
        $order->save();
        \Session::flash('message','Your order was added');
        return redirect('/orderhistory');
    }
}

?>
