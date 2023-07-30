@extends('layouts.main')
@section('content')
    <div class="container">
        <div class=mt-2>
            <div class="row mb-3">
                <div class="col-md-2 bg-danger themed-grid-col">
                    <h3>ADMIN MENU</h3>
                    <div class="row">
                        <div class="d-flex flex-column align-items-stretch bg-danger flex-shrink-0" style="width: 380px;">
                            <div class="list-group list-group-flush scrollarea">
                                <div class="b-example-divider"></div>
                                <a href="{{ route('admin.user.index')}}" class="list-group-item list-group-item-action py-3 bg-danger" aria-current="true">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Пользователи</strong>
                                    </div>
                                </a>
                                <div class="b-example-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('admin')
            </div>
        </div>
    </div>
@endsection



