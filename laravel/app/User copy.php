<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    //connect between tow tables DB one to many
    public function order()
    {
        return $this->hasOne("App\Order");
    }


    // use Notifiable;

    public static function SaveUser($req)
    {
        $valid = false;
        $user = new self();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->role = 5;
        $user->save();
        if ($user->id) {
            $valid  = true;
        }
        return $valid;
    }
}
