@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/hobbies.png')}}">ACTIVITIES</h2> 
@endsection

@section('pagetitle', 'Activities')

@section('page-description', ' ')

@section('main-content')
    @foreach($activity as $activity) 
    <div class="row">
        <div class="col-6 ml-5 bg-dark text-light mt-3">
            <h5 class="mt-2">{{$activity->name}}</h5>
        </div>
        <div class="col-sm-1 mt-4">
            <form action="{{route('activity.edit', $activity->id)}}" method="POST">
                @csrf
                @method('get')
               <button type="submit" class="text-info bg-black-9">Edit</button> 
            </form> 
        </div>
        <div class="col-sm-1 mt-4">
            <form action="{{route('activity.destroy', $activity->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-danger bg-black-9">Delete</button> 
            </form> 
        </div>
    </div>
    @endforeach 
    <div class="row">
        <div class="col-5"></div>
        <a href="{{route('activity.create')}}" class="text-light btn btn-info mt-4">ADD</a>
    </div>
@endsection