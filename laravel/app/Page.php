<?php

namespace App;
use App\Categorie;
use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    // echo __METHOD__;
    // // echo "<pre>";
    // // print_r($page_name);
    // die;

    public static function ShowPage(){
        //     echo __METHOD__;
        // // echo "<pre>";
        // // print_r($page_name);
        // die;
        $pages = self::all()->toArray();
        // dd($pages);
        // die;
        return  $pages;

    }


    public static function saveNewPage($request)
    {
        $valid = false;
        $page = new self();
        $page->page_name = $request->page_name;
        $page->title_main = $request->title_main;
        $page->text_main = $request->text_main;
        $page->image = Categorie::uploadFile($request);
        
        $page->save();

        if ($page->id) {
            $valid = true;
            // return true;
        }
        return  $valid;
    }


    public static function updatePage($request, $id)
    {
        // echo __METHOD__;
        // die;
        $valid = false;
        $page = self::find($id);
        $page->page_name = $request->page_name;
        $page->title_main = $request->title_main;
        $page->text_main = $request->text_main;


        if ($request->hasFile('image')) {
            $page->image = Categorie::uploadFile($request);
        }
        

        $page->save();

        if ($page->id) {
            $valid = true;
            // return  $valid;
        }
        // dd(count($checkCatName));
        return $valid;
    }
}
