<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Disease;

class DiseaseController extends Controller
{
    public function contact ()
    {
        $diseases = Disease::all();
        return view('pages.contact',['diseases' => $diseases]);

    }
}
