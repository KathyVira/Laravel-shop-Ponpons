<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public static function saveNewContact($request){

        $contact = new self();
        $valid = false;
        $contact->title = $request->title;
        $contact->adress = $request->adress;
        $contact->phone = $request->phone;
        $contact->fax = $request->fax;
        $contact->email = $request->email;

        


        $contact->save();
        if ($contact->id) {
            $valid = true;
            // return true;
        }
        return  $valid;
    }


    public static function updateContact($request, $id){
        $valid = false;
        $contact = self::find($id);
   
            $contact->title = $request->title;
            $contact->adress = $request->adress;
            $contact->phone = $request->phone;
            $contact->fax = $request->fax;
            $contact->email = $request->email;

  
            $contact->save();

            if ($contact->id) {
                $valid = true;
                // return  $valid;
            }

            // dd(count($checkCatName));

        
        return $valid;

    }
}

