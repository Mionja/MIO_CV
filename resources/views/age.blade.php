@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/age.png')}}">AGE</h2> 
@endsection

@section('pagetitle', 'Age')

@section('page-description', ' ')

@section('main-content')
<form action="{{route('update')}}" method="POST" class="black-form">
    @csrf
    @method('get')
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="age">Your age</label>
                    <input name="age" class="form-control" value="{{ $age->age }}" type="text" required>
                </div><!-- col -->
            </div><!-- row -->
        </div>
        <input type="submit" value="Save" class="btn  btn-success mt-5 float-right mr-5">
    </div>
</form>
@endsection