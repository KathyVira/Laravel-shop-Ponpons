<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Http\Requests\AddBanner;
use Session;


class CmsBanners extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo __METHOD__;die;

        self::$data['title'] .= "Banner";
        self::$data['banner'] = Banner::all()->toArray();
        self::$data['id'] = Banner::get('id')->toArray();
        self::$data['source'] = Banner::get('source')->toArray();

        // dd(self::$data['source']);die;
        return view('cms/banner/banners', self::$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo __METHOD__;die;
        self::$data['title'] .= "Add New Banner";

        return view('cms/banner/addBanner', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo __METHOD__;die;

        if (Banner::saveNewBanner($request)) {
            session()->flash('sm', "New banner created successfully");
            // flash('new cat sucsses');

            return redirect('cms/banner/banners');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo __METHOD__;die;
        if (self::$data['banner'] = Banner::find($id)->toArray()) {
            self::$data['title'] .= "Delete Form";
            self::$data['deleteType'] = "Banner";
            return view("cms/banner/deleteForm", self::$data);
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
        // echo __METHOD__;die;
        if (self::$data['banner'] = Banner::find($id)->toArray()) {
            // dd(self::$data['category'] = Categorie::find($id)->toArray());
            self::$data['title'] .= "Update Form";

            return view("cms/banner/EditBanner", self::$data);
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
    public function update(AddBanner $request, $id)
    {
        // echo __METHOD__;die;
        if (Banner::updateBanner($request, $id)) {


            session()->flash('sm', "The banner updated successfully");
            return redirect('cms/banner/banners');
        }
        return  redirect('cms/banner/banners')->withErrors("Banner not good");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id && is_numeric($id)) {
            Banner::destroy($id);
            Session::flash('sm', 'Banner removed successfully');
            return redirect("cms/banner/banners");
        }
    }
}
