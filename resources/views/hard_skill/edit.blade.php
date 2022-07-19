@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/skill.png')}}">HARD SKILLS</h2> 
@endsection

@section('pagetitle', 'Editing hard skill')

@section('page-description', ' ')

@section('main-content')
<form action="{{route('h_skill.show', $h_skill->id)}}" method="POST" class="black-form">
    @csrf
    @method('get')
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg">
                    <label for="name">Your Hard skill</label>
                    <input name="name" class="form-control" value="{{ $h_skill->name }}" type="text" required>
                </div><!-- col -->
            </div><!-- row -->
            <div class="row mr-5 mt-4">
                <div class="col-lg">
                    <span class="mr-5">Level :</span>
                    1 <input type="radio" name="level" value="12" class="mr-5" required>
                    2 <input type="radio" name="level" value="25" class="mr-5">
                    3 <input type="radio" name="level" value="50" class="mr-5">
                    4 <input type="radio" name="level" value="75" class="mr-5">
                    5 <input type="radio" name="level" value="100" class="mr-5">
                </div>
            </div>
        </div>
        <input type="submit" value="Save" class="btn  btn-success mt-5 float-right mr-5">
    </div>
</form>
@endsection