<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Page;


class CmsPages extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['title'] .= "Pages";
        self::$data['pages'] = Page::all()->toArray();
        // dd(Page::all()->toArray());
        return view('cms/page/pages', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$data['title'] .= "Add New Page";
        // self::$data['categories'] = Categorie::all()->toArray();
        // dd(self::$data['categories']);
        return view('cms/page/addpage', self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo __METHOD__;
        // die;
        if (Page::saveNewPage($request)) {
            session()->flash('sm', "New Page created successfully");
            // flash('new cat sucsses');

            return redirect('cms/page/pages');
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
        // echo __METHOD__;
        // die;
        if (self::$data['page'] = Page::find($id)->toArray()) {
            self::$data['title'] .= "Delete Form";
            self::$data['deleteType'] = "Page";
            return view("cms/page/deleteForm", self::$data);
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
        // echo __METHOD__;
        // die;
        if (self::$data['page'] = Page::find($id)->toArray()) {
            // dd(self::$data['category'] = Categorie::find($id)->toArray());
            self::$data['title'] .= "Update Form";

            return view("cms/page/EditPage", self::$data);
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
        // echo __METHOD__;
        // die;
        if (Page::updatePage($request, $id)) {


            session()->flash('sm', "The Page updated successfully");
            return redirect('cms/page/pages');
        }
        return  redirect('cms/page/pages')->withErrors("The page name have been taken");;
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
        // die;
        if ($id && is_numeric($id)) {
            Page::destroy($id);
            Session::flash('sm', 'Page removed successfully');
            return redirect("cms/page/pages");
        }
    }
}
