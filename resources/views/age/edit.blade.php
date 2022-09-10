@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/age.png')}}">AGE</h2> 
@endsection

@section('pagetitle', 'Age')


@section('main-content')
@foreach($age as $age)
<form action="{{route('age.update', $age->id )}}" method="POST" class="black-form">
    @csrf
    @method('put')
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="age" class="mb-3"><h4> Your age</h4></label>
                    <input name="age" class="form-control @error('age') is-invalid @enderror" value="{{ $age->age }}" type="text">
                    @error('age')
                    <div class="invalid-feedback">
                        You must fill this before saving
                    </div>    
                    @enderror
                </div><!-- col -->
            </div><!-- row -->
        </div>
        <input type="submit" value="Save" class="btn  btn-success mt-5 float-right mr-5">
    </div>
</form>
@endforeach
@endsection