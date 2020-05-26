<?php

namespace App\Http\Controllers;
use App\User;
use App\Organize;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class RegistersController extends Controller
{
    public function index()
    {
        return view('detailedorg');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = new User;
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        $organize = new Organize;
        $organize_id = $organize->id;
        $user->organize()->attach($organize_id);
        return redirect('/home');
    }

    public function show($id)
    {
        // return $id;
        $users = Organize::find($users->pivot->id);
        return view('infoorg')->with('users',$users);
    }
    public function destroy($id)
    {
        //
    }
}
