@extends('admin.index')
@section('admin')
    <div class="col-md-10 themed-grid-col">
        <form>
            <h1 class="h3 mb-3 mt-3 fw-normal">Добавить Пользователя </h1>
            <div class="col-6">
                <label class="text-small">Логин</label>
                <div class="form-floating">
                    <input type="text" class="form-control" name="login" id="floatingLogin" placeholder="login">
                    <label for="floatingLogin">login</label>
                    <div class="invalid-feedback">
                        Your login is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="text-small">Email</label>
                <div class="form-floating">
                    <input type="text" class="form-control" name="email" style="" id="floatingEmail" placeholder="login">
                    <label for="floatingEmail">email</label>
                    <div class="invalid-feedback">
                        Your email is required.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="text-small">Пароль</label>
                <div class="form-floating">
                    <input type="text" class="form-control" name="Password" id="floatingPassword" placeholder="Password">
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
