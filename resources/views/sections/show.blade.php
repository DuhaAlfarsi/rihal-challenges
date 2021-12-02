@extends('layouts.app')

@section('content')
<div class="container mt-4">
        {{--<form action="{{url('sections/show')}}" method="POST">
            @csrf--}}
            
            <div class="row">
              <div class="col-xl-10 m-auto">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold">{{__('Show all classes')}} </h4>
                            <button type="submit" class="btn btn-success"><a class="btn btn-success" href="/sections/create"> {{__('ADD')}}</a> </button>

                        </div>
                        <table class="table table-bordered">
                            <tr>
                              <th>{{__('ID')}}</th>
                              <th>{{__('Class Name')}}</th>
                              <th>{{__('Edit')}}</th>
                              <th>{{__('Delete')}}</th>

                            
                            </tr>

                            @foreach ($sections as $section)
                            <tr>
                                <td>{{ $section->id }} </td>
                                <td>{{ $section->class_name}}</td>
                                
                                <td>
                                    <a href="{{ url('sections/edit/'.$section->id) }}" class="btn btn-primary btn-sm">{{__('Edit')}}</a>
                                </td>
                                <td>
                                    <form action="{{ url('/sections/delete/'.$section->id) }}" method="POST">
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
@endsection