@extends('normal')

@section('main')
<div class="jumbotron text-center mt-5">
    <h1 class="text-dark">You should fill your personal details first</h1>
    <a href="{{route('perso_details.index')}}" class="btn btn-dark ml-5">Ok</a>
</div>
<marquee behavior="20" direction="right" class="mt-5">
    <img src="{{asset('img/oups.png')}}" alt="" class="rounded-circle img-fluid mr-5" style="width:150px">
</marquee>
@endsection

