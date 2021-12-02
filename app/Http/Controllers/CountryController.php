<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
class CountryController extends Controller
{
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
    {
        return view('countries.create');
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
            'name' => 'required',     

        ]);

        $record = Country::where(['name'=>$request->name ])->first();

        if($record)
        {
            return redirect()->back()->with('failed','Country Already Exist');
        }

        $country_name = $request->name;
        $country = new Country();
        $country->name =$country_name;
        $country->save();

        return redirect()->back()->with('success','Country Succefully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $country= Country::all();
        $data['countries']=Country::all();
        return view('countries.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::findOrfail($id);
        return view('countries.edit', compact('country'));
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
        $country = Country::findOrfail($id);
        $country->name = $request->input('name');
        $country->update();
        return redirect()->back()->with('success','Country Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country =Country::find($id);
        $country->delete();
        return redirect()->back()->with('success','Country Deleted Successfully');
    }
}
