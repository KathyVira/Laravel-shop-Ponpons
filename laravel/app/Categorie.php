<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categorie extends Model
{
    //connect between tow tables DB one to many
    public function product()
    {
        return $this->hasOne("App\Product");
    }

    public static  $fileName;
    public static function saveNewCategory($request)
    {
        // $valid = false;
        $category = new self();
        $category->cat_name = str_replace(" ", "_", $request->cat_name);
        $category->description = $request->description;
        $category->image = self::uploadFile($request);


        $category->save();
        if ($category->id) {
            // $valid = true;
            // return  $valid;
            return true;
        }
    }

    public static function uploadFile($request)
    {
        $file = $request->file('image');
        self::$fileName = "default.jpg";
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            self::$fileName = time() . $file->getClientOriginalName();
            // dd(self::$fileName);
            // I can cheak this too -getSize -getTempyName -getMineType todu
            $file->move(public_path() . "/images", self::$fileName);
        }
        return self::$fileName;
    }
    public static function updateCategory($request, $id)
    {
        $valid = false;
        $category = self::find($id);
        $checkCatName = DB::select('select * from categories where cat_name = ? ' . 'and id != ?', [$request->cat_name, $id]);

        if (count($checkCatName) == 0) {

            $category->cat_name = str_replace(" ", "_", $request->cat_name);
            $category->description = $request->description;

            if ($request->hasFile('image')) {
                $category->image = self::uploadFile($request);
            }
            $category->save();

            if ($category->id) {
                $valid = true;
                // return  $valid;
            }

            // dd(count($checkCatName));

        }
        return $valid;

        return  view('cms/category/categories')->withErrors("The category name have been taken");;
    }
}
