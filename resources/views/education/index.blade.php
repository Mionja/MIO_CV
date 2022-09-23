@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/education.png')}}">EDUCATION</h2> 
@endsection

@section('pagetitle', 'Education')

@section('page-description', ' ')

@section('main-content')
@if($educations->isNotEmpty())
<div class="container">
    <table class="table table-striped table-hover mb-5 rounded" >
        <div class="d-flex justify-content-center mt-3">
            {{ $educations->links() }}
        </div>
        <thead >
            <tr>
                <th scope="col" class="text-light">Course / Degree</th>
                <th scope="col" class="text-light">School / University</th>
                <th scope="col" class="text-light">Grade / Score</th>
                <th scope="col" class="text-light">Year</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($educations as $education)
            <tr scope="row">
                    <td>{{$education-> degree}}</td>
                    <td>{{$education-> school}}</td>
                    <td>{{$education-> grade}}</td>
                    <td>{{$education-> year}}</td>
                    {{-- Modification  --}}
                    <td>
                        <form action="{{route('education.edit', $education -> id)}}" method="POST">
                            @csrf
                            @method('get')
                            <input type="submit" class="text-info" value="Edit">
                        </form>
                    </td>
                    {{-- Deletion --}}
                    <td>
                        <form action="{{route('education.destroy', $education-> id)}}" method="post" class="">
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
            <a href="{{route('education.create')}}" class="btn btn-info float-right">ADD</a>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $educations->links() }}
    </div>
</div>
@else
<div class="row">
    <div class="col-5"></div>
    <div class="col-1 ml-5">
        <a href="{{route('education.create')}}" class="btn btn-info float-right">ADD</a>
    </div>
</div>

@endif
@endsection