@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <form action="{{url('students/store')}}" method="POST">
            @csrf
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
                            <h4 class="card-title font-weight-bold">{{__('Add New Student')}} </h4>
                        </div>
  
                      <div class="card-body ">
                        <div class="form-group mb-2">
                            <label for="sname"> {{__('Student Name')}} <span class="text-danger"> * </span></label>
                                <input type="text" name="sname" class="form-control" value="{{old('sname')}}" />
                                {!!$errors->first("sname", "<span class='text-danger'>:message</span>")!!}
                        </div>


                        <div class="form-group mb-2">
                            <label for="classID"> {{__('Class ID')}} <span class="text-danger"> * </span></label>
                                <select name="class_id" class="form-control" id="">
                                          @foreach ($sections as $section)
                                              <option value="{{$section->id}}">{{$section->id}}</option>
                                          @endforeach
                                      </select>
                                {!!$errors->first("class_id", "<span class='text-danger'>:message</span>")!!}
                        </div>


                        <div class="form-group mb-2">
                            <label for="countryID"> {{__('Country ID')}} <span class="text-danger"> * </span></label>
                                <select name="id" class="form-control" id="">
                                          @foreach ($countries as $country)
                                              <option value="{{$country->id}}">{{$country->id}}</option>
                                          @endforeach
                                      </select>
                                {!!$errors->first("id", "<span class='text-danger'>:message</span>")!!}
                        </div>

                        <div class="form-group mb-2">
                            <label for="birthday"> {{__('Date of BirthDay')}} <span class="text-danger"> * </span></label>
                                <input type="date" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}" />
                                {!!$errors->first("date_of_birth", "<span class='text-danger'>:message</span>")!!}
                        </div>
                           <div class="card-footer">
                            <button type="submit" class="btn btn-success"> {{__('ADD')}} </button>
                           </div>
                      </div>
                </div>
            </div>
        </form>
    </div>
    @endsection