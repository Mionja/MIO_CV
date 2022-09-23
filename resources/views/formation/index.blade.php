@extends('layout')

@section('page-title')
    <h2><img src = "{{asset('img/formation.png')}}">FORMATION</h2> 
@endsection

@section('pagetitle', 'Formation')

@section('page-description', ' ')

@section('main-content')
@if($formations->isNotEmpty())
<div class="container">
    <table class="table table-striped table-hover mb-5 rounded" >
        <div class="d-flex justify-content-center mt-3">
            {{ $formations->links() }} {{--paginate --}}
        </div>
        <thead >
            <tr>
                <th scope="col" class="text-light">Name</th>
                <th scope="col" class="text-light">About</th>
                <th scope="col" class="text-light">Start date</th>
                <th scope="col" class="text-light">End date</th>
                <th colspan="2"></th>
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
                            <input type="submit" class="text-info" value="Edit">
                        </form>
                    </td>
                    {{-- Deletion --}}
                    <td>
                        <form action="{{route('formation.destroy', $formation-> id)}}" method="post" class="">
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
            <a href="{{route('formation.create')}}" class="btn btn-info float-right">ADD</a>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $formations->links() }}
    </div>
</div>
@else
<div class="row">
    <div class="col-5"></div>
    <div class="col-1 ml-5">
        <a href="{{route('formation.create')}}" class="btn btn-info float-right">ADD</a>
    </div>
</div>
@endif
@endsection