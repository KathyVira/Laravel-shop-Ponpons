<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;

class CmsContacts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo __METHOD__;die;
        self::$data['title'] .= "Contacts";
        self::$data['contact'] = Contact::all()->toArray();
        // dd(self::$data['contacts']);die;
        return view('cms/contact/contacts', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo __METHOD__;die;
        self::$data['title'] .= "Add The Contact";

        return view('cms/contact/addContact', self::$data);
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
        if (Contact::saveNewContact($request)) {
            session()->flash('sm', "The Contact created successfully");
            // flash('new cat sucsses');

            return redirect('cms/contact/contacts');
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
        if (self::$data['contact'] = Contact::find($id)->toArray()) {
            self::$data['title'] .= "Delete Form";
            self::$data['deleteType'] = "Contact";
            // self::$data['deleteUrl'] = "'cms/contact/contacts'";
            return view("cms/contact/deleteForm", self::$data);
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
        if (self::$data['contact'] = Contact::find($id)->toArray()) {
            // dd(self::$data['category'] = Categorie::find($id)->toArray());
            self::$data['title'] .= "Update Form";

            return view("cms/contact/EditContact", self::$data);
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
        // echo __METHOD__;die;
        if (Contact::updateContact($request, $id)) {


            session()->flash('sm', "The Contact updated successfully");
            return redirect('cms/contact/contacts');
        }
        return  redirect('cms/contact/contacts')->withErrors("updating rejects");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo __METHOD__;die;
        if ($id && is_numeric($id)) {
            Contact::destroy($id);
            Session::flash('sm', 'Contact removed successfully');
            return redirect("cms/contact/contacts");
        }
    }
}
