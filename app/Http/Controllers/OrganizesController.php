<?php

namespace App\Http\Controllers;
use App\Organize;

use Illuminate\Http\Request;

class OrganizesController extends Controller
{
    public function __construct(){
    $this->middleware('auth',['except'=>'index']);
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizes = Organize::orderBy('created_at','asc')->get();
        return view('showorg')->with('organizes',$organizes);
    }
    public function show($id)
    {

        $organize = Organize::find($id);
        return view('infoorg')->with('organize',$organize);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createorg');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email'=>'email'
        ]);
        $organize = new Organize;
        $organize->name = $request->input('name');
        $organize->website = $request->input('website');
        $organize->email = $request->input('email');
        $organize->phone = $request->input('phone');
        $organize->address = $request->input('address');
        $user_id = auth()->user()->id;
        $organize->save();
        $organize->user()->attach($user_id);
        return redirect('/home');
    }



    
    


    public function edit($id)
    {
        $organize = Organize::find($id);
        return view('editorg')->with('organize',$organize);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email'=>'email'
        ]);
        $organize =Organize::find($id);
        $organize->name = $request->input('name');
        $organize->website = $request->input('website');
        $organize->email = $request->input('email');
        $organize->phone = $request->input('phone');
        $organize->address = $request->input('address');
        $organize->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organize = Organize::find($id);
        $organize->delete();
        $user_id = auth()->user()->id;
        $organize->user()->detach($user_id);
        return redirect('/home');
    }

}
