@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <div class="row">
          <div class="col-xl-10 m-auto">
                    <div class="card-header">
                        <h4 class="card-title font-weight-bold">{{__('Edit and Delete Stusents')}} </h4>
                        {{-- <button type="submit" class="btn btn-success"><a class="btn btn-success" href="/student/create"> {{__('ADD')}}</a> </button> --}}

                    </div>
                    <table class="table table-bordered">
                        <tr>
                          <th>NO</th>
                          <th>{{__('Student Name')}}</th>
                          <th>{{__('Class Name')}}</th>
                          <th>{{__('Country Name')}}</th>
                          <th>{{__('Date of BirthDay')}}</th>
                          <th>{{__('Edit')}}</th>
                          <th>{{__('Delete')}}</th>
                          

                        
                        </tr>

                        @foreach ($students as $student)
                        <tr>
                            <td>{{__($student->id)}} </td>
                            <td>{{__($student->sname)}} </td>
                            <td>{{ __($student->section->class_name) }}</td>
                            <td>{{ __($student->country->name) }}</td>
                            <td>{{ __($student->date_of_birth) }}</td>
                            <td>
                                <a href="{{ url('students/edit/'.$student->id) }}" class="btn btn-primary btn-sm">{{__('Edit')}}</a>
                            </td>
                            <td>
                                    <form action="{{ url('students/delete/'.$student->id) }}" method="POST">
                                        {{-- @method('delete') --}}
                                        @csrf
                                        <button class="btn btn-primary btn-sm">{{__('Delete')}}</button>
                                    </form>
                                </td>
                            
                        @endforeach
                        </tr>
                       
                    </table>
           
          </div>
       </div>
    </form>
         
</div>    
@endsection