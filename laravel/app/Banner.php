<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public static function saveNewBanner($request){

        $banner = new self();
      
        $banner->source = $request->source;

        $banner->save();
        if ($banner->id) {
            // $valid = true;
            // return  $valid;
            return true;
        }
    }
    public static function updateBanner($request, $id){

        $valid = false;
        $banner = self::find($id);          
            $banner->source = $request->source;           
            $banner->save();

            if ($banner->id) {
                $valid = true;
            }  
            return  $valid;
    }
}
