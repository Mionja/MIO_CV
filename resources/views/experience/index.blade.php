@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/experience.png')}}">EXPERIENCE</h2> 
@endsection

@section('pagetitle', 'Experience')

@section('page-description', '')

@section('main-content')
<h1>LIST OF ALL EXPERIENCES</h1>
<a href="{{route('experience.create')}}">ADD</a><br>
<a href="#">DELETE</a><br>
<a href="#">MODIFY</a>
@endsection