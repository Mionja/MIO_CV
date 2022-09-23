@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/education.png')}}">EDUCATION</h2> 
@endsection

@section('pagetitle', 'Adding education')

@section('page-description', ' ')

@section('main-content')

<form action="{{route('education.store')}}" method="POST" class="black-form">
    @csrf
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="couse">Course / Degree</label>
                    <input name="degree" class="form-control @error('degree') is-invalid @enderror" value="{{old('degree')}}" type="text">
                    @error('degree')
                    <p class="text-danger text-sm-left" style="font-size: 11px">
                        Please fill out this field
                    </p>    
                    @enderror
                </div><!-- col -->
            </div><!-- row -->
        
            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="school">School / University</label>
                    <input name="school" rows="3" value="{{old('school')}}" class="form-control @error('school') is-invalid @enderror">
                    @error('school')
                    <p class="text-danger text-sm-left" style="font-size: 11px">
                        Please fill out this field
                    </p>    
                    @enderror
                </div><!-- col -->
            </div><!-- row -->

            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="grade">Grade / Score</label>
                    <input type="text" class="form-control @error('grade') is-invalid @enderror" name="grade" id="" value="{{old('grade')}}">
                    @error('grade')
                    <p class="text-danger text-sm-left" style="font-size: 11px">
                        Please fill out this field
                    </p>    
                    @enderror
                </div><!-- col -->
            </div><!-- row -->

            <div class="row  mg-t-20">
                <div class="col-lg">
                    <label for="year">Year</label>
                    <input name="year" class="form-control @error('year') is-invalid @enderror" value="{{old('year')}}" type="text">
                    @error('year')
                    <p class="text-danger text-sm-left" style="font-size: 11px">
                        Please fill out this field
                    </p>    
                    @enderror
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