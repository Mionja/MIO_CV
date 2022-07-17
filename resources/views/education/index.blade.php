@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/education.png')}}">EDUCATION</h2> 
@endsection

@section('pagetitle', 'Education')

@section('page-description', ' ')

@section('main-content')
<div class="container">
    <table class="table table-striped table-hover table-dark mb-5 rounded" >
        <div class="d-flex justify-content-center mt-3">
            {{ $educations->links() }}
        </div>
        <thead >
            <tr>
                <th scope="col" class="text-light">Course / Degree</th>
                <th scope="col" class="text-light">School / University</th>
                <th scope="col" class="text-light">Grade / Score</th>
                <th scope="col" class="text-light">Year</th>
                <th colspan="2" class="text-light pl-5 border-left">Actions</th>
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
                            <img src="{{asset('img/edit.png')}}" class="icon w-20">
                            <button class="ml-1 text-info" type="submit">Edit</button>
                        </form>
                    </td>
                    {{-- Deletion --}}
                    <td>
                        <form action="{{route('education.destroy', $education-> id)}}" method="post" class="">
                            @csrf
                            @method('DELETE')
                            <img src="{{asset('img/delete.png')}}" class="icon w-20">
                            <button class=" text text-danger ml-1" type="submit">Delete</button>
                        </form>
                    </td>
            </tr>
            @endforeach  
            <a href="{{route('education.create')}}" class="btn btn-info float-right">ADD</a>
        </tbody>
    </table>
    
    <div class="d-flex justify-content-center mt-3">
        {{ $educations->links() }}
    </div>
</div>

@endsection