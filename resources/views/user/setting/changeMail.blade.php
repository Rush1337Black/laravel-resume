@extends('layouts.settings')
@section('setting')
        <div class="row g-5">
            <div class="col-md-7 col-lg-8">
                <form class="needs-validation" novalidate="">
                    <div class="col-6">

                        <div class="form-floating">
                            <h4 class="mb-3">Потвердите Email</h4>
                            <h5 class="mb-3 text-danger">{{ auth()->user()->email }}</h5>
                        </div>
                    </div>
                    <button class=" btn btn-primary col-7" type="submit">Отправить сообщение для подтверждения</button>
                </form>
                <hr class="my-4">
                <h4 class="mb-3 mt-2">Семенить Email</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row g-3">

                        <div class="col-sm-6">
                            <label class="text-small">Укажите нынешний новый Email</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="password_new" id="floatingEmailNew" placeholder="Email new">
                                <label for="floatingEmailNew">Email new</label>
                                <div class="invalid-feedback">
                                    Your login is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label class="text-small">Подтвердите новый Email</label>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="Email_confirm_new" id="floatingEmailConfirmNew" placeholder="Email confirm new">
                                <label for="floatingEmailConfirmNew">Email confirm new</label>
                                <div class="invalid-feedback">
                                    Your login is required.
                                </div>
                            </div>
                        </div>

                    </div>

                    <button class=" btn btn-primary mt-4 " type="submit">Сменить Email</button>
                </form>
            </div>
        </div>
@endsection
