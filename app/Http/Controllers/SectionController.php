<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sections.create');
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
            'class_name' => 'required',     

        ]);

        $record = Section::where(['class_name'=>$request->class_name ])->first();

        if($record)
        {
            return redirect()->back()->with('failed','class Already Exist');
        }

        $section_name = $request->class_name;
        $section = new Section();
        $section->class_name =$section_name;
        $section->save();

        return redirect()->back()->with('success','Class Succefully Add');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $section= Section::all();
        $data['sections']=Section::all();
        return view('sections.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = Section::findOrfail($id);
        return view('sections.edit', compact('section'));
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
        $section = Section::findOrfail($id);
        $section->class_name = $request->input('class_name');
        $section->update();
        return redirect()->back()->with('success','Class Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section =Section::find($id);
        $section->delete();
        return redirect()->back()->with('success','Class Deleted Successfully');
    }
}
