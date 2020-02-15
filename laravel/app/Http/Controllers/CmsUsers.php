<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCms;
use App\User;
use Session;

class CmsUsers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['title'] .= "Users";
        self::$data['users'] = User::all()->toArray();
        // dd(self::$data['users']);

        return view('cms/user/users', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo __METHOD__;
        die;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo __METHOD__;
        die;
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd(User::find($id)->toArray());
        // die;
        if (self::$data['user'] = User::find($id)->toArray()) {
            self::$data['title'] .= "Delete Form";
            self::$data['deleteType'] = "User";
            return view("cms/user/deleteForm", self::$data);
            // return self::$data;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (self::$data['user'] = User::find($id)->toArray()) {
            // dd(self::$data['category'] = Categorie::find($id)->toArray());
            self::$data['title'] .= "Update Form";

            return view("cms/user/EditUser", self::$data);
            // return self::$data;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if (UserCms::SaveUser($request, $id)) {

            session()->flash('sm', "The User updated successfully");
            return redirect('cms/user/users');
        }
        return  redirect('cms/user/users')->withErrors("The User email has been taken");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo __METHOD__;

        if ($id && is_numeric($id)) {
            User::destroy($id);
            Session::flash('sm', 'User removed successfully');
            return redirect("cms/user/users");
        }
    }
}
