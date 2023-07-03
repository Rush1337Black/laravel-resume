@extends('layouts.main')
@section('content')
    <div class="text-center">
        <div class="form-signin mt-1 text-start">
            <form>
                <h1 class="h3 mb-3 mt-3 fw-normal">Авторизация</h1>
                <div class="col-12">
                    <label class="text-small">Логин</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="login" id="floatingLogin" placeholder="login">
                        <label for="floatingLogin">login</label>
                        <div class="invalid-feedback">
                            Your login is required.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label class="text-small">Пароль</label>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">password</label>
                        <div class="invalid-feedback">
                            Your login is required.
                        </div>
                    </div>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> за помнить меня
                    </label>
                </div>
                <div class="col-12 mb-1">
                    <a href="{{ route('main.forgot.password') }}">Забыли пароль</a>
                </div>
                <div class="col-12 mb-1">
                    <a href="{{ route('main.registration') }}">Нету учетной записи?</a>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Авторизоваться</button>
            </form>
        </div>
    </div>
@endsection
