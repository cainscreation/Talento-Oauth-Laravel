<?php

namespace App\Http\Controllers;
use App\User;
use App\Organize;
use DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class RegistersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
{       
        $organizes = User::orderBy('created_at','asc')->get();
        return view('layouts.user')->with('organizes',$organizes);
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
        $roles = $request['roles'];

        if (isset($roles)) {
            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();            
            $user->assignRole($role_r);
            }
        }   
        $data = array('user_id'=>$users,'organize_id'=>$organize_id);
        DB::table('organize_user')->insert($data);
        return view('index');
    }
    public function destroy($id)
    {
        $users = User::find($id);
        $user = $users->id;
        $users->delete();
        $users->organize()->detach($user);
        return redirect('all_users');
        // return $users->id;
    }
    
    public function show($id){
        $roles = Role::get();
        $organ_id = Organize::find($id);
        return view('detailedorg')->with(['organ_id'=>$organ_id,'roles'=>$roles]);
    }
}
