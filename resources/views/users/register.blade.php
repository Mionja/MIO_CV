@extends('normal')

@section('main')
<main>
    <div class="mx-4 mb-5">
        <div class="container border mt-5 bg-light" style="border:1px solid black; border-radius:10px; width:36%;box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.30);">
            <form action="{{route('store_user')}}" method="POST" class="form-signin center bordered">
                @csrf

                <div class="text-center mt-3">
                    <img class="mb-4" src="{{asset('img/mm.png')}}" alt="logo" width="72" height="72">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><img src="{{asset('img/name.png')}}" width="18"></span>
                    <input type="text" class="@error('name') is-invalid @enderror form-control" placeholder="Name" name="name" value="{{old('name')}}"/>
                </div>
                @error('name')
                <p class="text-danger text-xs mt-1">
                    Please enter a valid name
                </p>
                @enderror

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="email" class="@error('email') is-invalid @enderror form-control" placeholder="Email" name="email" value="{{old('email')}}"/>
                </div>
                @error('email')
                <p class="text-danger text-xs mt-1">
                    Please enter a valid email
                </p>
                @enderror

                <div class="input-group mb-3">
                    <span class="input-group-text"><img src="{{asset('img/password.png')}}" width="18"></span>
                    <input type="password" class="@error('password') is-invalid @enderror form-control" placeholder="Password" name="password" value="{{old('password')}}"/>
                </div>
                    @error('password')
                        <p class="text-danger text-xs mt-1">
                            Must be 3 caracters at the minimum
                        </p>
                    @enderror

                <div class="input-group mb-3">
                    <span class="input-group-text"><img src="{{asset('img/confirm.png')}}" width="18"></span>
                    <input type="password" class=" @error('password_confirmed') is-invalid @enderror form-control" placeholder="Confirm password" name="password_confirmed" value="{{old('password_confirmed')}}"/>
                </div>
                @error('password_confirmed')
                    <p class="text-danger text-xs mt-1">
                       Password does not match
                    </p>
                @enderror

                <button class="btn btn-lg btn-primary btn-block mt-5" type="submit">Register</button>

                <div class="mt-2">
                    <p>
                        Already have an account?
                        <a href="{{route('login')}}" class="text-laravel">Login</a>
                    </p>
                </div>

                <div class="text-center">
                    <p class="mt-5 text-muted">© 2021-2022</p>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection