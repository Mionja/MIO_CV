@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/education.png')}}">EDUCATION</h2> 
@endsection

@section('pagetitle', 'Education')

@section('page-description', ' ')

@section('main-content')
<h1>LIST OF EVERY EDUCATION</h1>
<a href="{{route('education.create')}}">ADD</a><br>
<a href="#">DELETE</a><br>
<a href="#">MODIFY</a>
@endsection