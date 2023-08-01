@extends('admin.index')
@section('admin')
    <div class="col-md-10 themed-grid-col">
        <form  action="{{ route('admin.user.store') }}" method="POST">
            @csrf
            <h1 class="h3 mb-3 mt-3 fw-normal">Добавить Пользователя </h1>
            <div class="col-6">
                <label class="text-small">Логин</label>
                <div class="form-floating">
                    <input type="text" class="form-control" name="login" id="floatingLogin" placeholder="login" value="{{ old('login')}}">
                    <label for="floatingLogin">login</label>
                    <div class="invalid-feedback">
                        Your login is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="text-small">Email</label>
                <div class="form-floating">
                    <input type="text" class="form-control" name="email" style="" id="floatingEmail" placeholder="email" value="{{ old('email')}}">
                    <label for="floatingEmail">email</label>
                    <div class="invalid-feedback">
                        Your email is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="text-small">Имя</label>
                <div class="form-floating">
                    <input type="text" class="form-control" name="name" id="floatingName" placeholder="Name"  value="{{ old('name')}}">
                    <label for="floatingName">name</label>
                    <div class="invalid-feedback">
                        Your login is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="text-small">Роль</label>
                <div class="form-floating">
                    <input type="text" class="form-control" name="role" id="floatingRole" placeholder="role" value="{{ old('role')}}">
                    <label for="floatingRole">role</label>
                    <div class="invalid-feedback">
                        Your login is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="text-small">Пароль</label>
                <div class="form-floating">
                    <input type="text" class="form-control" name="password" id="floatingPassword" placeholder="Password"  value="{{ old('password')}}">
                    <label for="floatingPassword">password</label>
                    <div class="invalid-feedback">
                        Your login is required.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-2" type="submit">Добавить</button>
        </form>
    </div>
@endsection
