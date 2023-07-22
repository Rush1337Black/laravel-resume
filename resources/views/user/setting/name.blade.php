@extends('layouts.settings')
@section('setting')
    <div class="row g-5">
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3 mt-2">Основное</h4>
            <form class="needs-validation" action="{{ route('user.setting.name.update')}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="text-small">Имя</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="name" id="floatingUserName" placeholder="You Name" value="{{ auth()->user()->name }}">
                            <label for="floatingUserName">Имя</label>
                            <div class="invalid-feedback">
                                Your login is required.
                            </div>
                        </div>
                    </div>
                </div>
                <button class=" btn btn-primary mt-4 " type="submit">Обновить</button>
            </form>
        </div>
    </div>
@endsection
