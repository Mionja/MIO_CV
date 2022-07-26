@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/education.png')}}">EDUCATION</h2> 
@endsection

@section('pagetitle', 'Editing education')

@section('page-description', ' ')

@section('main-content')

<form action="{{route('education.update', $education-> id)}}" method="POST" class="black-form">
    @csrf
    @method('put')
        <div class="br-section-wrapper">
        <div class="row">
            <div class="col-lg">
                <label for="couse">Course / Degree</label>
                <input name="degree" class="form-control @error('degree') is-invalid @enderror" value="{{ $education -> degree }}" type="text" >
            </div><!-- col -->
        </div><!-- row -->
    
        <div class="row mg-t-20">
            <div class="col-lg">
                <label for="school">School / University</label>
                <input name="school" rows="3" value="{{ $education -> school }}" class="form-control @error('school') is-invalid @enderror" >
            </div><!-- col -->
        </div><!-- row -->

        <div class="row mg-t-20">
            <div class="col-lg">
                <label for="grade">Grade / Score</label>
                <input type="text" class="form-control @error('grade') is-invalid @enderror" name="grade" id="" value="{{$education -> grade}}" >
            </div><!-- col -->
        </div><!-- row -->

        <div class="row  mg-t-20">
            <div class="col-lg">
                <label for="year">Year</label>
                <input name="year" class="form-control @error('year') is-invalid @enderror" value="{{$education -> year}}" type="text" >
            </div><!-- col -->
        </div><!-- row -->
        <div class="row  mg-t-20">
            <div class="col-lg">
            <input type="submit" value="Save" class="btn  btn-success mt-5 float-right mr-5">
        </div><!-- col -->
        </div><!-- row -->
        </div>
    </div>
</form>         
@endsection