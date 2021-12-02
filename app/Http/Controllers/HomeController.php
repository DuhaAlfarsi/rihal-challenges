<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student;
use Carbon\Carbon;






class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $student = DB::table('students')->GroupBy('section_id')->count();
        $country = DB::table('students')->GroupBy('country_id')->count();
        

        //average age 


        /* $date_of_birth= DB::table('students')->get('date_of_birth');
        $age=Carbon::createFromFormat('d/m/Y', $date_of_birth)->toDateTimeString(); 
        $age =Carbon::parse($date_of_birth)->age;

        dd($age);
        $average = DB::table('students')->avg('age');   */
        
        /* $date_of_birth = Student::select('date_of_birth')->get();
        $age = Student::carbonDatesToAge($date_of_birth); */


       /*  $students = Student::where('date_of_birth')->get();
        $averageAge = AverageAge::forStudents($students); */
        

           
        return view('home',compact('student','country'));
        
    }

    

   
    
}
