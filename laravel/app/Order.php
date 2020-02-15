<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session, Cart;
use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
//connect between tow tables DB one to many
    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public static function SaveOrder()
    {
        $valid = false;
        $order = new self();
        $order->user_id = Session::get("user_id");
        $order->content = Cart::getContent()->toJson();
        $order->subtotal = Cart::getTotal();
        $order->save();

        if ($order->id) {
            Cart::clear();
            $valid = true;
        }
        return $valid;
    }

    // public static function ShowOrder(){
    //     // echo __METHOD__;die;
    //     $orders = self::all()->toArray();

    //     // die;http://localhost:8000/user/login
    //     return  ($orders);

    // }
}
