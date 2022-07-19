@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/skill.png')}}">HARD SKILLS</h2> 
@endsection

@section('pagetitle', 'Hard skills')

@section('page-description', ' ')

@section('main-content')
@foreach($h_skill as $h_skill) 
    <div class="row">
        <div class="col-6 ml-5 bg-dark text-light mt-3">
            <h5 class="mt-2 mr-5">{{$h_skill->name}}</h5>
        </div>
        <div class="col-sm-1 mt-4">
            <form action="{{route('h_skill.edit', $h_skill->id)}}" method="POST">
                @csrf
                @method('get')
               <button type="submit" class="text-info bg-black-9">Edit</button> 
            </form> 
        </div>
        <div class="col-sm-1 mt-4">
            <form action="{{route('h_skill.destroy', $h_skill->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-danger bg-black-9">Delete</button> 
            </form> 
        </div>
    </div>
    @endforeach 
    <div class="row">
        <div class="col-5"></div>
        <a href="{{route('h_skill.create')}}" class="text-light btn btn-info mt-4">ADD</a>
    </div>

@endsection