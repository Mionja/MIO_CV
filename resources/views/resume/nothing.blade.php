@extends('normal')

@section('main')
    <h1 class="text-light">you should fill your personal details first</h1>
    <a href="{{route('perso_details.index')}}" class="btn btn-dark ml-5">Ok</a>
@endsection

