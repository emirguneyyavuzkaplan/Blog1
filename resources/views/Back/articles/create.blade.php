@extends('back.layouts.master')
@section('title','Makale Oluştur')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
        </div>
        <div class="card-body">
            <form method="post" action="{{route('admin.makaleler.store')}}" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Makale Başlığı</label>
                    <input type="text" name="title" class="form-control" id="" />
                </div>
                <div class="form-group">
                    <label for="">Makale Kategori</label>
                    <select name="category" class="form-control" id="">

                        <option value="">Seçim yapınız</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Makale Fotoğrafı</label>
                    <input type="file" name="image" class="form-control" required />
                </div>

                <div class="form-group">
                    <label for="">Makale İçeriği</label>
                    <textarea name="content" class="form-control" id="editor" ></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Makale oluştur</button>
                </div>

            </form>
        </div>
    </div>
@endsection
@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection
@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote(
                {
                    'height':300
                }
            );
        });
    </script>
@endsection

