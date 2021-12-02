@extends('layouts.app')

@section('content')
<div class="container mt-5">
      <form action="{{url('countries/update/'.$country->id)}}" method="POST">
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
                          <h4 class="card-title font-weight-bold">{{__('Edit and Update countries')}} </h4>
                      </div>

                      <div class="card-body ">
                        <div class="form-group mb-2">
                            <label for="name"> {{__('Country Name')}} <span class="text-danger"> * </span> </label>
                                <input type="text" name="name" class="form-control" value="{{$country->name}}" />
                                {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                      </div>

                        

                         <div class="card-footer">
                          <button type="submit" class="btn btn-success"> {{__('Update Country')}}</button>
                         </div>
                    </div>
              </div>
          </div>
      </form>
  @endsection