@extends('layouts.main')
@section('content')
    <div class="container">
        <div class=" rounded text-body-emphasis bg-body-secondary">
            <div class=".container-md background-image mt-2"  style="background-image:url(/images/userNoImg.png)">
                <div class=" p-3">
                    <h3 class="p-1">Профиль</h3>
                    <img src="images/userNoImg.png" alt="mdo" width="200" height="200" class="rounded-circle p-1">
                    <h4 class="p-1">{{ auth()->user()->login }}</h4>
                    <p class="lead p-1"><a href="{{ route('user.settings') }}" class="text-body-emphasis fw-bold">Настройки Профиля</a></p>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-12">
                    <div class="row g-0 p-3 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class=" col p-2 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">Дата регистрации</strong>
                            <h3 class="mb-0">0</h3>
                        </div>
                        <div class="col p-2 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">Рейтинг</strong>
                            <h3 class="mb-0">0</h3>
                        </div>
                        <div class="col p-2 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">Продажи</strong>
                            <h3 class="mb-0">0</h3>
                        </div>
                        <div class="col p-2 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">Покупки</strong>
                            <h3 class="mb-0">0</h3>
                        </div>
                        <div class="col p-2 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">Сообщений</strong>
                            <h3 class="mb-0">0</h3>
                        </div>
                        <div class="col p-2 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">Баланс</strong>
                            <h3 class="mb-0">0</h3>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">1</strong>
                            <h3 class="mb-0"> </h3>
                            <div class="mb-1 text-body-secondary">1111111111111111</div>
                            <p class="card-text mb-auto">11111111111111111111</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success-emphasis">2</strong>
                            <h3 class="mb-0">2</h3>
                            <div class="mb-1 text-body-secondary">2</div>
                            <p class="mb-auto">2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
