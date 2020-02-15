<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Cart;
use Session;


class ShopController extends Controller
{
    public static function AddToCart(Request $request)
    {
        if (is_numeric($request->product_id) && $request->product_id != 0) {
            // echo"test ";die;
            if ($product =  Product::find($request->product_id)->toArray()) {
                // $product =  Product::find($request->product_id)->toArray();
                Cart::add($product['id'], $product['name'], $product['price'], 1, array());

                Session::flash('sm', "{$product['name']} Added to the cart");
                echo true;
            } else {
                #todo
            }
        } else {
            #todo

        }
    }


    public static function RemoveFromCart(Request $request)
    {

        // $product =  Product::find($request->product_id)->toArray();
        Cart::remove($request->product_id);
        Session::flash('sm', "Product removed from the cart");
        echo true;
    }




    public static function ShowCart()
    {
        self::$data['title'] .= "Cart";
        // self::$data['cartContent'] = Cart::getContent();
        self::$data['cartContent'] = json_decode(Cart::getContent()->toJson());
        return  view('cart', self::$data);
    }



    public static function UpdateCard(Request $request)
    {
        $request->product_id;
        if (is_numeric($request->product_id) && $request->product_id != 0) {
            if (Cart::get($request->product_id)) {
                Cart::update(
                    $request->product_id,
                    array(
                        'quantity' => -1,
                    )
                );
                Session::flash('sm', "Quantity successfully updated");
                echo true;
            }
        } else {

            // RemoveFromCart($request);
        }
    }

    public static function SaveOrder()
    {
        if (Session::get('user_id')) {

            if (Cart::getTotalQuantity() > 0) {
                if (Order::SaveOrder()) {
                    Session::flash('sm', "Your order has been saved");
                    return redirect("shop/GoToCart");
                } else {
                    return redirect("shop/GoToCart")->withErrors("Somethin wrong");
                }
            } else {
                return redirect("/")->withErrors("The cart is empty");
            }
        } else {
            return redirect("user/login")->withErrors("You must Login before saving an order");
        }
    }
}
