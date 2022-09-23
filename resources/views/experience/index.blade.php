@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/experience.png')}}">EXPERIENCE</h2> 
@endsection

@section('pagetitle', 'Experience')

@section('page-description', '')

@section('main-content')

@if($experiences->isNotEmpty())
<div class="container">
    <table class="table table-striped table-hover mb-5 rounded" >
        <div class="d-flex justify-content-center mt-3">
            {{ $experiences->links() }}
        </div>
        <thead >
            <tr>
                <th scope="col" class="text-light">Company name</th>
                <th scope="col" class="text-light">Job title</th>
                <th scope="col" class="text-light">Start date</th>
                <th scope="col" class="text-light">End date</th>
                <th scope="col" class="text-light w-5">Details</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($experiences as $experience)
            <tr scope="row">
                    <td>{{$experience-> company}}</td>
                    <td>{{$experience-> job}}</td>
                    <td>{{$experience-> start}}</td>
                    <td>{{$experience-> end}}</td>
                    <td>{{$experience-> details}}</td>
                    {{-- Modification  --}}
                    <td>
                        <form action="{{route('experience.edit', $experience -> id)}}" method="POST">
                            @csrf
                            @method('get')
                            <input type="submit" class="text-info" value="Edit">
                        </form>
                    </td>
                    {{-- Deletion --}}
                    <td>
                        <form action="{{route('experience.destroy', $experience-> id)}}" method="post" class="">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="text-danger" value="Delete">
                        </form>
                    </td>
            </tr>
            @endforeach  
        </tbody>
    </table>
    <div class="row">
        <div class="col-5"></div>
        <div class="col-1 ml-5">
            <a href="{{route('experience.create')}}" class="btn btn-info float-right">ADD</a>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $experiences->links() }}
    </div>
</div>
@else
<div class="row">
    <div class="col-5"></div>
    <div class="col-1 ml-5">
        <a href="{{route('experience.create')}}" class="btn btn-info float-right">ADD</a>
    </div>
</div>
@endif
@endsection