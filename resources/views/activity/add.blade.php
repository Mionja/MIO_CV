@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/hobbies.png')}}">ACTIVITIES</h2> 
@endsection

@section('pagetitle', 'Adding Activity')

@section('page-description', ' ')

@section('main-content')
<form action="{{route('activity.store')}}" method="POST" class="black-form">
    @csrf
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="name">Your Activity</label>
                    <input name="name" class="form-control" value="" type="text" required>
                </div><!-- col -->
            </div><!-- row -->
        </div>
        <input type="submit" value="Add" class="btn  btn-success mt-5 float-right mr-5">
    </div>
</form>
@endsection