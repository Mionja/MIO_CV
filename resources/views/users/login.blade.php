@extends('normal')

@section('main')
<div class="mx-4">
    <div class="container border mt-5 bg-light" style="border:1px solid black; border-radius:10px; width:36%;box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.30);">
        <form action="{{route('authenticate')}}" method="POST" class="form-signin center bordered">
            @csrf
            <div class="text-center mt-4">
                <img class="mb-4" src="{{asset('img/mm.png')}}" alt="logo" width="72" height="72">
            </div>
            <div class="text-center">
                <p>Create your cv</p>
            </div>
            <div class="input-group mb-3 mt-5">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{old('email')}}">
            </div>
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
    
            <div class="input-group mb-3">
                <span class="input-group-text"><img src="{{asset('img/password.png')}}" width="18"></span>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{old('password')}}">
            </div>
                    @error('password')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
    
            <button class="btn btn-lg btn-primary btn-block mt-5" type="submit">Log in</button>
            <div class="mt-2">
                <p>
                    Don't have an account?
                    <a href="{{route('register')}}" class="text-laravel">Register</a>
                </p>
            </div>
            <div class="text-center">
                <p class="mt-5 text-muted">© 2021-2022</p>
            </div>
        </form>
    </div>
</div>
@endsection