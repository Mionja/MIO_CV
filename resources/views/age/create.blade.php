@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/age.png')}}">AGE</h2> 
@endsection

@section('pagetitle', 'Age')

@section('page-description', ' ')

@section('main-content')
<form action="{{route('age.store')}}" method="POST" class="black-form">
    @csrf
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="age" class="mb-3"><h4> Your age</h4></label>
                    <input name="age" class="form-control @error('age') is-invalid @enderror" type="text">
                    @error('age')
                    <div class="invalid-feedback">
                        You must fill this before saving
                    </div>    
                    @enderror
                </div><!-- col -->
            </div><!-- row -->
        </div>
        <input type="submit" value="Save" class="btn  btn-success mt-5 float-right mr-5">
    </div>
</form>
@endsection