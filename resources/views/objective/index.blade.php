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
                    <label for="objective">Your Objective</label>
                    <input name="objective" class="form-control" value="{{ $obj->objective }}" type="text" required>
                </div><!-- col -->
            </div><!-- row -->
        </div>
        <input type="submit" value="Save" class="btn btn-success mt-5 float-right mr-5">
    </div>
</form>
@endsection