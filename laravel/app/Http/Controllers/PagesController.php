<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use Cart;
use App\Page;
use App\Order;

class PagesController extends Controller
{
    public function home()
    {
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['title'] .= "Home";
        return  view('home', self::$data);
    }

    public function ShowCat($cat_name)
    {
        $cat = Categorie::where('cat_name', "$cat_name")->first()->toArray();
        $products = Product::where('cat_id', "{$cat['id']}")->paginate(4);
        self::$data["objProducts"] = $products;
        self::$data["products"] = $products->toArray();



        self::$data['title'] .= "$cat_name";
        // self::$data['categories'] = Categorie::all()->toArray();
        // echo "<pre>";
        // print_r(self::$data["products"]->links());
        // die;


        return  view('category', self::$data);
    }

    public function ShowProduct($product_id)
    {
        $product = Product::find($product_id)->toArray();

        $cat = Categorie::where('id', "{$product['cat_id']}")->first()->toArray();
        self::$data['category'] =  $cat;
        self::$data['categories'] = Categorie::all()->toArray();

        self::$data["product"] = $product;
        self::$data["title"] .= "{$product['name']}";
        return  view('product', self::$data);
    }



    public function ShowDashboard()
    {
        return view("cms.dashboard", self::$data);
    }


    public function ShowPage($page_name)
    {
        // $pages = Page::ShowPage($page_name);
        $pages = Page::where('page_name', $page_name)->first()->toArray();

        // echo __METHOD__;
        // // echo "<pre>";
        // dd($pages);
        // die;

        self::$data["page_name"] = $page_name;
        self::$data['title'] .= $page_name;
        self::$data['title_main'] = "{$pages['title_main']}";
        self::$data['text_main'] = "{$pages['text_main']}";
        self::$data['image'] = "{$pages['image']}";



        // dd(self::$data);
        // print_r($pages['text_main']);
        // die;
        // // self::$data['categories'] = Categorie::all()->toArray();

        // self::$data["title"] .= $pages['page_name'];
        return  view('page', self::$data);
    }

    // public static function ShowOrder()
    // {

    //     echo __METHOD__;
    //     die;

    //     $orders = Order::ShowOrder();

    //     dd($orders::get('user_id'));
    //     die;
    // }
}
