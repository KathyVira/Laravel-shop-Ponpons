<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Socialite;


class LoginController extends BaseController
{
    public function redirectToProvider()
    {
        // echo __METHOD__;
        // die;

        // return Socialite::driver('facebook')
        // ->scopes(['read:user', 'public_repo'])
        // ->redirect();

        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {

        // echo __METHOD__;
        // die;

        $user = Socialite::driver('facebook')->user();

        echo $user->name;
    }
}
