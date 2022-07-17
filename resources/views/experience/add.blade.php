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
                    <input name="company" class="form-control" value="" type="text" required>
                </div><!-- col -->
            </div><!-- row -->
        
            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="job">Job title</label>
                    <input name="job" rows="3" value="" class="form-control" required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row mg-t-20">
                <div class="col-lg">
                    <label for="start">Start date</label>
                    <input type="date" class="form-control" name="start" id="" value="" required>
                </div><!-- col -->
                <div class="col-lg">
                    <label for="end">End date</label>
                    <input name="end" class="form-control" value="" type="date" required>
                </div><!-- col -->
            </div><!-- row -->
            <div class="row  mg-t-20">
                <div class="col-lg">
                    <label for="details">Details</label>
                    <textarea name="details" class="form-control" value="" ></textarea>
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