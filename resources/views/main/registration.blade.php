@extends('layouts.main')
@section('content')
    <div class="text-center">
        <div class="form-signin mt-1 text-start">
            <form form action="{{ route('user.registration') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="h3 mb-3 mt-3 fw-normal">Регистрация </h1>
                <div class="col-12">
                    <label class="text-small">Логин</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="login" id="floatingLogin" placeholder="Login" value="{{ old('login')}}">
                        <label for="floatingLogin">login</label>
                        @error('login')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <label class="text-small">Email</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="email" style="" id="floatingEmail" placeholder="Email" value="{{ old('email')}}">
                        <label for="floatingEmail">email</label>
                        @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <label class="text-small">Пароль</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="password_main" id="floatingPasswordConfirm" placeholder="Password" value="{{ old('password_main')}}">
                        <label for="floatingPasswordConfirm">password</label>
                        @error('password_main')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <label class="text-small">Подтвердите пароль</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="password_confirm" id="floatingPasswordConfirm" placeholder="Password Confirm" value="{{ old('password_confirm')}}">
                        <label for="floatingPasswordConfirm">password confirm</label>
                        @error('password_confirm')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 checkbox mb-3">
                    <label>
                        <input type="checkbox" name="remember_me"  value="remember-me"> Принимаю
                    </label>
                    @error('remember_me')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12 mb-1">
                    <a href="{{ route('main.authorization') }}">Есть учетная запись?</a>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
@endsection

