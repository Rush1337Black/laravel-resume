@extends('admin.index')
@section('admin')
    <div class="col-md-10 themed-grid-col">
        <div class="col-md-10 row">
            <div class="col-1 themed-grid-col">LOGIN</div>
            <div class="col-11 themed-grid-col">{{ $user->login }}</div>
        </div>
        <div class="col-md-10 row">
            <div class="col-1 themed-grid-col">EMAIL</div>
            <div class="col-11 themed-grid-col">{{ $user->email }}</div>
        </div>
        <div class="col-md-10 row">
            <div class="col-1 themed-grid-col">ROLE</div>
            <div class="col-11 themed-grid-col">{{ $user->role}}</div>
        </div>
        <div class="col-md-10 row">
            <div class="col-1 themed-grid-col">verified</div>
            <div class="col-11 themed-grid-col">{{ $user->email_verified_at }}</div>
        </div>
        <div class="col-md-10 row">
            <div class="col-1 themed-grid-col">name</div>
            <div class="col-11 themed-grid-col">{{ $user->name}}</div>
        </div>
        <div class="col-md-10 row">
            <div class="col-2 themed-grid-col">SHIFT HISTORY</div>
            <div class="col-5 themed-grid-col">EMAIL LINK</div>
            <div class="col-5 themed-grid-col">PASSWORD LINK</div>
        </div>
    </div>
@endsection
