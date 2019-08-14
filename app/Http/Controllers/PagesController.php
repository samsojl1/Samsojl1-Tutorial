<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show index page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('pages.index');
    }
    
    /**
     * Show About page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function about(){
        return view('pages.about');
    }
}
