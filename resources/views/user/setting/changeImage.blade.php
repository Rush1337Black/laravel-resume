@extends('layouts.settings')
@section('setting')
    <div class="row g-5">
        <div class="col-md-7 col-lg-8">
            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3 mt-2">Аватар и Фон</h4>
                    <form class="needs-validation" action="{{ route('user.setting.image.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="p-1">
                            <img src="{{ Storage::url(auth()->user()->path_image_avatar) }} " id="image" alt="mdo" width="200" height="200" class="p-1">
                        </div>
                        <div class="p-2">
                            <input type="file" id="file" name="path_image_avatar"/>
                        </div>
                        @error('path_image_avatar')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <div class="p-1">
                            <img class=".container-md background-image mt-2" src="{{ Storage::url(auth()->user()->path_image_background) }}" width="700" height="300" id="image_background" alt="mdo" >
                        </div>
                        <div class="p-2">
                            <input type="file" id="file_background" name="path_image_background"/>
                        </div>
                        @error('path_image_background')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="p-2">
                            <button class=" btn btn-primary mt-4 " type="submit">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
    document.getElementById('file').addEventListener('change', function() {
        if (this.files && this.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('image').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });

    document.getElementById('file_background').addEventListener('change', function() {
        if (this.files && this.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('image_background').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
@endsection
