<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Disease;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function contact()

    {

        $diseases = Disease::all();

        return view('pages.contact',['diseases' => $diseases]);

        
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function error()
    {
        return view('pages.error');
    }
    public function login()
    {
        return view('pages.login');
    }
    // public function contact ()
    // {


    // }

}

