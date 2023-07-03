@extends('layouts.main')
@section('content')
    <div class="text-center">
        <div class="form-signin mt-1 text-start">
            <form>
                <h1 class="h3 mb-3 mt-3 fw-normal">Регистрация </h1>
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
                    <label class="text-small">Email</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="email" style="" id="floatingEmail" placeholder="login">
                        <label for="floatingEmail">email</label>
                        <div class="invalid-feedback">
                            Your email is required.
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
                <div class="col-12">
                    <label class="text-small">Подтвердите пароль</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="password_confirm" id="floatingPasswordConfirm" placeholder="login">
                        <label for="floatingPasswordConfirm">password confirm</label>
                        <div class="invalid-feedback">
                            Your login is required.
                        </div>
                    </div>
                </div>
                <div class="col-12 checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Принимаю
                    </label>
                </div>
                <div class="col-12 mb-1">
                    <a href="{{ route('main.authorization') }}">Есть учетная запись?</a>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
@endsection

