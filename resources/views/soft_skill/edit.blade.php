@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/s_skill.png')}}">SOFT SKILLS</h2> 
@endsection

@section('pagetitle', 'Editing Soft skill')

@section('page-description', ' ')

@section('main-content')
<form action="{{route('s_skill.show', $s_skill->id)}}" method="POST" class="black-form">
    @csrf
    @method('get')
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="name">Your Activity</label>
                    <input name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $s_skill->name }}" type="text" required>
                    @error('name')
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
@endsection