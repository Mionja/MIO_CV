@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/education.png')}}">EDUCATION</h2> 
@endsection

@section('pagetitle', 'Education')

@section('page-description', ' ')

@section('main-content')

<form action="{{route('education.store')}}" method="POST" class="black-form">
    @csrf
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="couse">Course / Degree</label>
                    <input name="degree" class="form-control" value="" type="text" required>
                </div><!-- col -->
            </div><!-- row -->
        
            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="school">School / University</label>
                    <input name="school" rows="3" value="" class="form-control" required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="grade">Grade / Score</label>
                    <input type="text" class="form-control" name="grade" id="" value="" required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row  mg-t-20">
                <div class="col-lg">
                    <label for="year">Year</label>
                    <input name="year" class="form-control" value="" type="text" required>
                </div><!-- col -->
            </div><!-- row -->
            <div class="row  mg-t-20">
                <div class="col-lg">
                    <input type="submit" value="Add " class="btn  btn-success mt-5 float-right mr-5">
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div>
</form>         
@endsection