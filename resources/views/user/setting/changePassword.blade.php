@extends('layouts.settings')
@section('setting')
    <div class="row g-5">
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Семенить Пароль</h4>
            <form class="needs-validation" action="{{ route('user.setting.changePassword.update')}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="row g-3">
                    <div class="col-12">
                        <label class="text-small">Укажите нынешний пароль</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="password" id="floatingPassword" placeholder="password">
                            <label for="floatingPassword">password</label>
                            <div class="invalid-feedback">
                                Your login is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label class="text-small">Укажите нынешний новый пароль</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="password_new" id="floatingPasswordNew" placeholder="password new">
                            <label for="floatingPasswordNew">password new</label>
                            <div class="invalid-feedback">
                                Your login is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label class="text-small">Подтвердите новый пароль</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="password_confirm_new" id="floatingPasswordConfirmNew" placeholder="password confirm new">
                            <label for="floatingPasswordConfirmNew">password confirm new</label>
                            <div class="invalid-feedback">
                                Your login is required.
                            </div>
                        </div>
                    </div>

                </div>

                <button class="mt-4 btn btn-primary " type="submit">Сменить пароль</button>
            </form>
        </div>
    </div>

@endsection
