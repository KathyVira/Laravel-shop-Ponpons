<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use Cart;
use Illuminate\Support\Facades\DB;
use Session;

class CmsOrders extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['title'] .= "Orders";
        $order = Order::all();
        self::$data['orders'] = Order::all()->toArray();
        self::$data['orders'] = DB::select('select o.*,u.name,u.email from orders as o join users as u on o.user_id = u.id');
        // self::$data['orders']['users'] = User::all()->toArray();
        // self::$data['orders']['order'] = $order->find('content');
        // dd(self::$data['orders']);


        return view('cms/order/orders', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // print_r(Order::find($id));
        if (self::$data['order'] = Order::find($id)->toArray()) {
            self::$data['title'] .= "Delete Form";
            self::$data['deleteType'] = "Order";

            // dd(self::$data);
            return view("cms/order/deleteForm", self::$data);
            //     // return self::$data;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo __METHOD__;
        // die;
        // if ($id && is_numeric($id)) {
        Order::destroy($id);
        Session::flash('sm', 'Order removed successfully');
        return redirect("cms/order/orders");
        // }
    }
}
