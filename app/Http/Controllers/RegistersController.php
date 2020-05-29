<?php

namespace App\Http\Controllers;
use App\User;
use App\Organize;
use DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class RegistersController extends Controller
{
    public function index($id)
    {   $organ_id = Organize::find($id);
        return view('detailedorg')->with('organ_id',$organ_id);
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
        $organize_id = $request->input('organization');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        $users=$user->id;
        $data = array('user_id'=>$users,'organize_id'=>$organize_id);
        DB::table('organize_user')->insert($data);
        return view('index');
    }
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        $user_id = organize()->id;
        $organize->user()->detach($user_id);
        return redirect('/home');
    }
}
