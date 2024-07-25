<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = user::all();
        return view('admin.index',['users'=>$users]);
    }

    public function create()
    {
        return view('admin.create');

    }
    public function show($id)
        {
            $users = User::find($id);
            return view('admin.show')->with('user', $users);
        }
    public function edit(Request $request,$id)
        {
            $users = User::find($id);
            return view('admin.edit')->with('user', $users);
        }
    public function store(Request $request)
        {
            $input = $request->all();
            User::create($input);
            return redirect('admin')->with('flash_message', '  Addedd!');
        }
    public function update(Request $request, $id)
        {
            $request->validate([
            'name'=>'required | max:255',
            'email'=>'required|email:rfc,dns',
            'phone'=>'required |size:11',
            'subject'=>'required',
            'message'=>'required',
            'gender'=> 'required',
            'image'=>'required',
            'disease_type'=>'required'
            ]);

            $user = User::find($id);
            $user->update($request->all());
            return redirect('admin')->with('flash_message', 'Updated!');
        }
    public function destroy($id)
        {
            $item =User::find($id);
            $item->delete();

             if (!$item) {
               return redirect()->back()->with('error','Data not found');}

                $item->delete();

            return redirect('admin');
        }
    public function status(Request $request,$id)
    {

        $users  = user::find($id);

          if ($users->status === 'pending')
          {
              $users->status = 'checked';
          }
          else
          {
            $users->status = "pending";
          }

        //    Save the updated status
          $users->update();

          return redirect('/admin');

    }
    public function search (Request $request)
    {
        $query = $request->input('query');
        // Perform search logic here, e.g., query the database
        $users = User::where('name', 'like', '%'.$query.'%')->get();
        //   return response()->json($users);
         return view('admin.index', ['users' => $users]);
    }


}


