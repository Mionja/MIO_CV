@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/formation.png')}}">FORMATION</h2> 
@endsection

@section('pagetitle', 'Formation')

@section('page-description', ' ')

@section('main-content')

<div class="container">
    <table class="table table-striped table-hover table-dark mb-5 rounded" >
        <div class="d-flex justify-content-center mt-3">
            {{ $formations->links() }}
        </div>
        <thead >
            <tr>
                <th scope="col" class="text-light">Name</th>
                <th scope="col" class="text-light">About</th>
                <th scope="col" class="text-light">Start date</th>
                <th scope="col" class="text-light">End date</th>
                <th colspan="2" class="text-light pl-5 border-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formations as $formation)
            <tr scope="row">
                    <td>{{$formation-> name}}</td>
                    <td>{{$formation-> about}}</td>
                    <td>{{$formation-> start}}</td>
                    <td>{{$formation-> end}}</td>
                    {{-- Modification  --}}
                    <td>
                        <form action="{{route('formation.edit', $formation -> id)}}" method="POST">
                            @csrf
                            @method('get')
                            <img src="{{asset('img/edit.png')}}" class="icon w-20">
                            <button class="ml-1 text-info" type="submit">Edit</button>
                        </form>
                    </td>
                    {{-- Deletion --}}
                    <td>
                        <form action="{{route('formation.destroy', $formation-> id)}}" method="post" class="">
                            @csrf
                            @method('DELETE')
                            <button ml-1" type="submit"><img src="{{asset('img/delete.png')}}" class="icon w-20"></button>
                        </form>
                    </td>
            </tr>
            @endforeach  
        </tbody>
    </table>
    <div class="row">
        <div class="col-5"></div>
        <div class="col-1 ml-5">
            <a href="{{route('formation.create')}}" class="btn btn-info float-right">ADD</a>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $formations->links() }}
    </div>
</div>
@endsection