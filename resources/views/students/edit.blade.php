@extends('layouts.app')

@section('content')
<div class="container mt-5">
      <form action="{{url('students/update/'.$student->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-xl-8 m-auto">
              <div class="card shadow">
                      @if(Session::has('success'))
                          <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">✔</button>
                              {{Session::get('success')}}
                          </div>
                      @elseif(Session::has('failed'))
                          <div class="alert alert-danger alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                              {{Session::get('failed')}}
                          </div>
                      @endif

                      <div class="card-header">
                          <h4 class="card-title font-weight-bold">{{__('Edit and Update students')}} </h4>
                      </div>
 
                      <div class="card-body ">
                        <div class="form-group mb-2">
                            <label for="sname"> {{__('Student Name')}} <span class="text-danger"> * </span></label>
                                <input type="text" name="sname" class="form-control" value="{{$student->sname}}" />
                                {!!$errors->first("sname", "<span class='text-danger'>:message</span>")!!}
                        </div>


                        <div class="form-group mb-2">
                            <label for="className"> {{__('Class Name')}} <span class="text-danger"> * </span></label>
                            <select name="class_name" class="form-control" id="">
                                          @foreach ($section as $section)
                                              <option value="{{$section->id}}">{{$section->class_name}}</option>
                                          @endforeach
                                      </select>
                                {!!$errors->first("class_name", "<span class='text-danger'>:message</span>")!!}
                        </div>


                        <div class="form-group mb-2">
                            <label for="countryName"> {{__('Country Name')}} <span class="text-danger"> * </span></label>
                            <select name="name" class="form-control" id="">
                                          @foreach ($country as $country)
                                              <option value="{{$country->id}}">{{$country->name}}</option>
                                          @endforeach
                                      </select>
                                {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                        </div>

                        <div class="form-group mb-2">
                            <label for="birthday"> {{__('Date of BirthDay')}} <span class="text-danger"> * </span></label>
                                <input type="date" name="date_of_birth" class="form-control" value="{{$student->date_of_birth}}" />
                                {!!$errors->first("date_of_birth", "<span class='text-danger'>:message</span>")!!}
                        </div>
                         <div class="card-footer">
                          <button type="submit" class="btn btn-success"> {{__('Update Class')}}</button>
                         </div>
                    </div>
              </div>
          </div>
      </form>
  @endsection