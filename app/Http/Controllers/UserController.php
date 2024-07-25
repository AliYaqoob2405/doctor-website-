<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\models\User;
use App\models\Disease;


class UserController extends Controller
{

    public function getData(Request $req)
    {
         $req->validate([
            'name'=>'required | max:255',
            'email'=>'required|email:rfc,dns',
            'phone'=>'required |size:11',
            'subject'=>'required',
            'message'=>'required',
            'gender'=> 'required',
            'image'=>'required',
            'disease_type'=>'required'

        ]);


        $Data = new User();
        $Data->name = $req['name'];
        $Data->email = $req['email'];
        $Data->phone = $req['phone'];
        $Data->subject = $req['subject'];
        $Data->disease_type = $req['disease_type'];
        $Data->image = $req['image'];
        $Data->gender = $req['gender'];
        $Data->city = $req['city'];
        $Data->message = $req['message'];
        $Data->status = $req['status'];
         $Data->save();
       // Redirect back or show a success message
         return redirect()->back()->with('success', 'Data saved successfully!');


        // return "our team will contact you soon";
    }


}
