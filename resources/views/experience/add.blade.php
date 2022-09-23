@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/experience.png')}}">EXPERIENCE</h2> 
@endsection

@section('pagetitle', 'Adding Experience')

@section('page-description', '')

@section('main-content')
<form action="{{route('experience.store')}}" method="POST" class="black-form">
    @csrf
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="company">Company name</label>
                    <input name="company" class="form-control @error('company') is-invalid @enderror"  type="text" value="{{old('company')}}">
                       @error('company')
                    <p class="text-danger text-sm-left" style="font-size: 11px">
                        Please fill out this field
                    </p>
                    @enderror
                </div><!-- col -->
            </div><!-- row -->
        
            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="job">Job title</label>
                    <input name="job" rows="3"  class="form-control @error('job') is-invalid @enderror" value="{{old('job')}}">
                       @error('job')
                    <p class="text-danger text-sm-left" style="font-size: 11px">
                        Please fill out this field
                    </p>
                    @enderror
                </div><!-- col -->
            </div><!-- row -->

            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="start">Start date</label>
                    <input type="date" class="form-control @error('start') is-invalid @enderror" name="start" id="" value="{{old('start')}}">
                       @error('start')
                    <p class="text-danger text-sm-left" style="font-size: 11px">
                        Please fill out this field
                    </p>
                    @enderror
                </div><!-- col -->
                <div class="col-lg">
                    <label for="end">End date</label>
                    <input name="end" class="form-control @error('end') is-invalid @enderror" value="{{old('end')}}" type="date">
                       @error('end')
                    <p class="text-danger text-sm-left" style="font-size: 11px">
                        Please fill out this field
                    </p>
                    @enderror
                </div><!-- col -->
            </div><!-- row -->
            <div class="row  mg-t-20">
                <div class="col-lg">
                    <label for="details">Details</label>
                    <input name="details" class="form-control @error('details') is-invalid @enderror" value="{{old('details')}}" type="text">
                    @error('details')
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