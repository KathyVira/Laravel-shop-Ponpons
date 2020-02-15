<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Categorie;
use App\Page;
use App\Banner;
use App\Contact;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static $data;
    public function __construct(){
        self::$data['title'] =  "Ponpon's | ";
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['pages'] = Page::all()->toArray();
        self::$data['banner'] = Banner::all()->toArray();
        self::$data['contact'] = Contact::all()->toArray();

    }
}
