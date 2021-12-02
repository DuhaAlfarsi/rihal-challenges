<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Section;
use App\Country;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $data['students'] = Student::all();
        return view('students.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['students'] = Student::all();
        $data['sections'] = Section::all();
        $data['countries'] = Country::all();
        return view('students.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'sname' => 'required',
            'date_of_birth' => 'required',
        ]);

        $student = new Student;
        $student->sname = $request->sname;
        $student->date_of_birth = $request->date_of_birth;
        $student->section_id = $request->id;
        $student->country_id = $request->id ;
        $student->id =Section::findOrFail($request->id)->section_id;
        $student->id =Country::findOrFail($request->id)->country_id;
        $student->save(); 

        return redirect()->back()->with('success','Student Succefully Add');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $students = Student::all();
        $data['students'] = Student::all();
        return view('students.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['student']= Student::findOrfail($id);
        $data['section'] = Section::select('id','class_name')->get();
        $data['country'] = Country::select('id','name')->get();
        return view('students.edit',$data);
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
        $student = Student::findOrfail($id);
        $student->sname=  $request->input('sname');
        $student->date_of_birth =  $request->input('date_of_birth');
        $student->save();
        return redirect()->back()->with('success','student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect()->back()->with('success','Student Deleted Successfully');
    }

}
