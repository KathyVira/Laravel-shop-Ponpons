<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SingInRequest;
use App\Http\Requests\SignUpRequest;
use App\User;
use Hash, Session;

class UserController extends Controller
{
    public static function ShowLoginForm()
    {
        self::$data['title'] .= 'Login';
        return view('forms.login', self::$data);
    }
    public static function ShowSignUpForm()
    {

        self::$data['title'] .= 'SignUp';
        return view('forms.signup', self::$data);
    }

    public static function ValidateUser(SingInRequest $request)
    {
        if ($user = User::where('email', $request->email)->first()) {
            $user = $user->toArray();
            if (Hash::check($request->password, $user['password'])) {
                Session::put("user_id", $user['id']);
                Session::put("user_name", $user['name']);
                Session::flash("sm", "Hello {$user['name']}");
                if ($user['role'] == 7) {
                    Session::put("is_admin", true);
                }
                return redirect('/');
            }
            return redirect('user/login')->withErrors("invalid email or password");
        }
        return redirect('user/login')->withErrors("invalid email or password");
    }

    public static function LogOut()
    {
        Session::flush();
        return redirect('/');
    }


    public static function SignUpUser(SignUpRequest $request)
    {
        if (User::SaveUser($request)) {
            Session::flash("sm", " Hello {$request->name}, your account was created, please log in ");
            return redirect('user/login');
        }
    }
}
