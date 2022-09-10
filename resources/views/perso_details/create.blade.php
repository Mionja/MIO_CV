@extends('layout')

@section('pagetitle', 'Personnal details')

@section('page-title')
    <h2><img src = "{{asset('img/perso_detail.png')}}">PERSONAL DETAILS</h2> 
@endsection

@section('page-description', ' As it says you can write things about you here ')

@section('main-content')
     <form action="{{route('perso_details.store')}}" method="POST" enctype="multipart/form-data" class="black-form">
        @csrf
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
        <div class="br-pagebody">
            <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="name">Name</label>
                <input name="nom" class="form-control" type="text" required>
                </div><!-- col -->
            </div><!-- row -->
        
            <div class="row mg-t-20">
                <div class="col-lg">
                <label for="address">Address</label>
                <input name="address" rows="3" class="form-control" required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row mg-t-20">
                <div class="col-lg">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email"  required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row  mg-t-20">
                <div class="col-lg">
                    <label for="num">Phone number</label>
                <input name="num" class="form-control"  type="number" required>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row  mg-t-20">
                <div class="col-lg">
                    <label for="num" class="mt-5">Your profile picture</label>
                    <div class="row">
                        <div class="col-4">
                            <input name="photo" class="form-control mt-4" type="file">
                        </div>
                    </div>
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