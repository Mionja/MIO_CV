@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/experience.png')}}">EXPERIENCE</h2> 
@endsection

@section('pagetitle', 'Adding Experience')

@section('page-description', '')

@section('main-content')
<form action="{{route('experience.store')}}" method="POST" class="black-form">
    @csrf
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="company">Company name</label>
                    <input name="company" class="form-control @error('company') is-invalid @enderror" value="" type="text">
                       @error('company')
                    <div class="invalid-feedback">
                        These forms must be filled
                    </div>    
                    @enderror
                </div><!-- col -->
            </div><!-- row -->
        
            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="job">Job title</label>
                    <input name="job" rows="3" value="" class="form-control @error('job') is-invalid @enderror">
                       @error('job')
                    <div class="invalid-feedback">
                        These forms must be filled
                    </div>    
                    @enderror
                </div><!-- col -->
            </div><!-- row -->

            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="start">Start date</label>
                    <input type="date" class="form-control @error('start') is-invalid @enderror" name="start" id="" value="">
                       @error('start')
                    <div class="invalid-feedback">
                        These forms must be filled
                    </div>    
                    @enderror
                </div><!-- col -->
                <div class="col-lg">
                    <label for="end">End date</label>
                    <input name="end" class="form-control @error('end') is-invalid @enderror" value="" type="date">
                       @error('end')
                    <div class="invalid-feedback">
                        These forms must be filled
                    </div>    
                    @enderror
                </div><!-- col -->
            </div><!-- row -->
            <div class="row  mg-t-20">
                <div class="col-lg">
                    <label for="details">Details</label>
                    <input name="details" class="form-control @error('details') is-invalid @enderror" value="" type="text">
                    @error('details')
                    <div class="invalid-feedback">
                        These forms must be filled
                    </div>    
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