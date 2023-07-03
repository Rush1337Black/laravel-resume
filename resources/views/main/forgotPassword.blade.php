@extends('layouts.main')
@section('content')
    <div class="text-center">
        <div class="form-signin mt-1 text-start">
            <form>
                <h1 class="h3 mb-3 mt-3 fw-normal">Забыли пароль</h1>
                <div class="col-12 mb-3">
                    <label class="text-small">Email</label>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="email" style="" id="floatingEmail" placeholder="login">
                        <label for="floatingEmail">email</label>
                        <div class="invalid-feedback">
                            Your login is required.
                        </div>
                    </div>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Отправить</button>
            </form>
        </div>
    </div>
@endsection
