@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/objective.png')}}">OBJECTIVE</h2> 
@endsection

@section('pagetitle', 'Objective')

@section('page-description', ' ')

@section('main-content')
<form action="{{route('objective.update', $obj->id)}}" method="POST" class="black-form">
    @csrf
    @method('put')
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="objective"><h4>Your Objective</h4> </label>
                    <textarea name="objective" class="form-control mt-3" type="text" required style="height: 150px">{{ $obj->objective }}</textarea>
                </div><!-- col -->
            </div><!-- row -->
        </div>
        <input type="submit" value="Save" class="btn btn-success mt-5 float-right mr-5 mb-5">
    </div>
</form>
@endsection