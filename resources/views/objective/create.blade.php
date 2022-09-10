@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/objective.png')}}">OBJECTIVE</h2> 
@endsection

@section('pagetitle', 'Objective')

@section('page-description', ' ')

@section('main-content')
<form action="{{route('objective.store')}}" method="POST" class="black-form">
    @csrf
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="objective"><h4>Your Objective</h4> </label>
                    <textarea name="objective" class="form-control mt-3 @error('objective') is-invalid @enderror" type="text" style="height: 150px"></textarea>
                    @error('objective')
                    <div class="invalid-feedback">
                        You must fill this before saving
                    </div>    
                    @enderror
                </div><!-- col -->
            </div><!-- row -->
        </div>
        <input type="submit" value="Save" class="btn btn-success mt-5 float-right mr-5 mb-5">
    </div>
</form>
@endsection