<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use DB;

use App\Organize;

class AddCoursesController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $courses = Course::all();
        return view('add_courses.create',['courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request['id'];
        $organize = Organize::find($id);

        $org_id = $organize->id;
        $courses = $request['courses'];

        foreach ($courses as $course) {
            $p = Course::where('id', '=', $course)->firstOrFail();
            $course_id = $p->id;
            $data = array('course_id'=>$course_id,'organize_id'=>$org_id);
            DB::table('course_organize')->insert($data);
            
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organize = Organize::find($id);
        $courses = Course::all();
        return view('add_courses.create',['courses'=>$courses,'organize'=>$organize]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
