@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/formation.png')}}">FORMATION</h2> 
@endsection

@section('pagetitle', 'Editing formation')

@section('page-description', ' ')

@section('main-content')

<form action="{{route('formation.update', $frm->id)}}" method="POST" class="black-form">
    @csrf
    @method('put')
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="name">Name of the formation</label>
                    <input name="name" class="form-control" value="{{$frm->name}}" type="text" required>
                </div><!-- col -->
            </div><!-- row -->
        
            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="about">About</label>
                    <input name="about" rows="3" value="{{$frm->about}}" class="form-control" required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="start">Start date</label>
                    <input type="date" class="form-control" name="start" id="" value="{{$frm->start}}" required>
                </div><!-- col -->
                <div class="col-lg">
                    <label for="end">End date</label>
                    <input name="end" class="form-control" value="{{$frm->end}}" type="date" required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row  mg-t-20">
                <div class="col-lg">
                    <input type="submit" value="Save " class="btn  btn-success mt-5 float-right mr-5">
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div>
</form>
@endsection