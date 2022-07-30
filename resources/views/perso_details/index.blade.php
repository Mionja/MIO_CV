@extends('layout')

@section('pagetitle', 'Personnal details')

@section('page-title')
    <h2><img src = "{{asset('img/perso_detail.png')}}">PERSONAL DETAILS</h2> 
@endsection

@section('page-description', ' As it says you can write things about you here ')

@section('main-content')
     <form action="{{route('perso_details.update', $perso_details->id)}}" method="POST" class="black-form">
        @csrf
        @method('put')
        <div class="br-pagebody">
            
            <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="name">Name</label>
                <input name="nom" class="form-control" value="{{ $perso_details->nom }}" type="text" required>
                </div><!-- col -->
            </div><!-- row -->
        
            <div class="row mg-t-20">
                <div class="col-lg">
                <label for="address">Address</label>
                <input name="address" rows="3" value="{{ $perso_details->address }}" class="form-control" required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row mg-t-20">
                <div class="col-lg">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $perso_details->email }}" required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row  mg-t-20">
                <div class="col-lg">
                    <label for="num">Phone number</label>
                <input name="num" class="form-control" value="{{ $perso_details->num }}" type="number" required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row  mg-t-20">
                <div class="col-lg">
                    <label for="num">Your profile photo</label>
                <input name="photo" class="form-control" value="{{ $perso_details->photo }}" type="file" required>
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