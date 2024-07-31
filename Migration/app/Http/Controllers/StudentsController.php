<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\program;
use App\Models\department;
use App\Models\User;
use Illuminate\Http\Request;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function adduser()
    {
        $user = User::get();
        return
        view('adduser',compact('user'));
    }
    public function user(){
        $user = new User();
        $user->factory(1)->create();
        return redirect()->route('adduser');
    }
    public function multiuser(Request $request){
        $user = new User();
        $user->factory($request->number)->create();
        return redirect()->route('adduser');
    }
    public function show()
    {
        $student = Students::get();
        return view('show',compact('student'));
    }
    public function student()
    {
        return view('student');
    }
    public function department()
    {
        return view('department');
    }
    public function programs()
    {
        return view('programs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $student = new department();
         $student->id = $request->id;
         $student->name = $request->name;
         $student->save();
         return redirect()->route('show');
    }
    public function addprogram(Request $request)
    {
        $program = new program();
        $program->id = $request->id;
        $program->name = $request->name;
        $program->departmentid = $request->departmentid;
        $program->save();
        return redirect()->route('show');
    }
    function addstudent(Request $request)
    {
        $student = new Students();
        $student->id = $request->id;
        $student->name = $request->name;
        $student->enrollmentno = $request->enrollment;
        $student->programid = $request->program;
        $student->departmentid = $request->department;
        $student->save();
        return redirect()->route('show');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $student = Students::find($id);
        $student->name = $request->name;
        $student->enrollmentno = $request->enrollment;
        $student->programid = $request->program;
        $student->departmentid = $request->department;
        $student->save();
        return redirect()->route('show');
    }
    public function update($id){
        $student = Students::find($id);
        return view('update',compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Students::find($id);
        $student->delete();
        return redirect()->route('show');
    }
}
