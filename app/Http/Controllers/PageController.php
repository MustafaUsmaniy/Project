<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function create_product(){
        return view('pages.create_product');
    }

    public function create_folder(){
        return view('pages.create_folder');
    }
}
