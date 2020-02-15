<?php

namespace App;

use App\Categorie;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //connect between tow tables DB one to many
    public function categorie()
    {
        return $this->belongsTo("App\Categorie");
    }

    public static function saveNewProduct($request)
    {
        $valid = false;
        $product = new self();
        $product->cat_id = $request->cat_name;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = Categorie::uploadFile($request);
        $product->price = $request->price;
        $product->save();

        if ($product->id) {
            $valid = true;
            // return true;
        }
        return  $valid;
    }

    public static function updateProduct($request, $id)
    {
        $valid = false;
        $product = self::find($id);
        $product->cat_id = $request->cat_name;
        $product->name = $request->name;
        $product->description = $request->description;


        if ($request->hasFile('image')) {
            $product->image = Categorie::uploadFile($request);
        }
        $product->price = $request->price;

        $product->save();

        if ($product->id) {
            $valid = true;
            // return  $valid;
        }
        // dd(count($checkCatName));
        return $valid;
    }
}
