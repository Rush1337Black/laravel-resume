@extends('layouts.main')
@section('content')
    <div class="container">
        <div class=mt-2>
            <div class="row mb-3">
                <div class="col-md-2 themed-grid-col">
                    <div class="pb-4">
                        <div class="p-1">
                            <h3>Настройки</h3>
                            <a href="{{ route('user.profile') }}" class="text-body-emphasis fw-bold">Профиль</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
                            <div class="list-group list-group-flush border-bottom scrollarea">
                                <a href="{{ route('user.setting.index') }}" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Основное</strong>
                                    </div>
                                </a>
                                <a href="{{ route('user.setting.changeMail') }}" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Email</strong>
                                    </div>
                                </a>
                                <a href="{{ route('user.setting.changePassword') }}" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Пароль</strong>
                                    </div>
                                </a>

                                <a href="{{ route('user.setting.image.index') }}" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Аватар и Фон</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 themed-grid-col">
                    @yield('setting')
                </div>
            </div>
        </div>
    </div>
@endsection
