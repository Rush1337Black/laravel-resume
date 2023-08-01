@extends('admin.index')
@section('admin')
        <div class="col-md-10 themed-grid-col">
            <h3 class="p-1">USER</h3>
            <a href="{{ route('admin.user.create')}}"> <button class="btn btn-primary p-1">Создать пользователя</button></a>
            <h3 class="p-1">IIST USER</h3>
            <div class="row">
                <div class="col-1 themed-grid-col">ID</div>
                <div class="col-3 themed-grid-col">LOGIN</div>
                <div class="col-2 themed-grid-col">BALANCE</div>
                <div class="col-1 themed-grid-col">ROLE</div>
                <div class="col-1 themed-grid-col">.FREEZE</div>
                <div class="col-1 themed-grid-col">.BAN</div>
                <div class="col-1 themed-grid-col">.EDIT</div>
                <div class="col-1 themed-grid-col">.VIEW</div>
                <div class="col-1 themed-grid-col">.DELETE</div>
            </div>
            @foreach($users as $user)
                <div class="row">
                    <div class="col-1 themed-grid-col">{{ $user->id }}</div>
                    <div class="col-3 themed-grid-col">{{ $user->login }}</div>
                    <div class="col-2 themed-grid-col">{{ $user->blance }}</div>
                    <div class="col-1 themed-grid-col">{{ $user->role}}</div>

                    @if($user->isFrozen)
                        <div class="col-1 themed-grid-col">Есть</div>
                    @else
                        <div class="col-1 themed-grid-col">Нету</div>
                    @endif

                    @if($user->isBan)
                        <div class="col-1 themed-grid-col">Есть</div>
                    @else
                        <div class="col-1 themed-grid-col">Нету</div>
                    @endif

                    <div class="col-1 themed-grid-col "><a class="text-success" href="{{ route('admin.user.edit',$user->id) }}">.EDIT</a></div>

                    <div class="col-1 themed-grid-col"><a href="{{ route('admin.user.show',$user->id) }}">.VIEW</a></div>
                    <div class="col-1 themed-grid-col">
                        <form action=" {{ route('admin.user.destroy',$user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value=".DELETE">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
