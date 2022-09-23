@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/formation.png')}}">FORMATION</h2> 
@endsection

@section('pagetitle', 'Adding formation')

@section('page-description', '')

@section('main-content')
<form action="{{route('formation.store')}}" method="POST" class="black-form">
    @csrf 
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">   
    <div class="br-section-wrapper">
        <div class="row">
            <div class="col-lg">
                <label for="name">Name of the formation</label>
                <input name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" type="text" >
                @error('name')
                <p class="text-danger text-sm-left" style="font-size: 11px">
                    Please fill out this field  
                </p>
                @enderror
            </div><!-- col -->
        </div><!-- row -->
    
        <div class="row mg-t-20">
            <div class="col-lg">
                <label for="about">About</label>
                <input name="about" rows="3" value="{{old('about')}}" class="form-control @error('about') is-invalid @enderror">
                @error('about')
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
                <input type="submit" value="Add " class="btn  btn-success mt-5 float-right mr-5">
            </div><!-- col -->
        </div><!-- row -->
    </div>
</div>
</form>    
@endsection