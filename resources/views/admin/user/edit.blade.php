@extends('admin.index')
@section('admin')

        <div class="col-md-10 themed-grid-col">
            <h3 class="p-1">USER</h3>
            <a href="CreateUser.html"> <button class="btn btn-primary p-1">Создать пользователя</button></a>
            <h3 class="p-1">IIST USER</h3>
            <div class="row">
                <div class="col-2 themed-grid-col">ID</div>
                <div class="col-3 themed-grid-col">LOGIN</div>
                <div class="col-2 themed-grid-col">BALANCE</div>
                <div class="col-2 themed-grid-col">ROLE</div>
                <div class="col-1 themed-grid-col">.FREEZE</div>
                <div class="col-1 themed-grid-col">.BAN</div>
                <div class="col-1 themed-grid-col">.VIEW</div>
            </div>
            <div class="row">
                <div class="col-2 themed-grid-col">1</div>
                <div class="col-3 themed-grid-col">ааа</div>
                <div class="col-2 themed-grid-col">100</div>
                <div class="col-2 themed-grid-col">ADMIN</div>
                <div class="col-1 themed-grid-col">ДА</div>
                <div class="col-1 themed-grid-col">ДА</div>
                <div class="col-1 themed-grid-col">.VIEW</div>
            </div>
        </div>

@endsection
