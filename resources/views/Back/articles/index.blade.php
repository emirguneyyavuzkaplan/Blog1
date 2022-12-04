@extends('back.layouts.master')
@section('title','Tüm Makaleler')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
                <span class="float-right">{{$articles->count()}} makale bulundu </span> </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Fotoğraflar</th>
                        <th>Makale Baslıgı</th>
                        <th>Kategori</th>
                        <th>Hit</th>
                        <th>Olusturulma Tarihi</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($articles as $article)
                    <tr></tr>
                    <td>
                        <img src="{{$article->image}}" width="200">
                    </td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->getCategory->name}}</td>
                    <td>{{$article->hit}}</td>
                    <td>{{$article->created_at->diffForHumans()}}</td>
                   <input type="checkbox" data-on="Aktif" data-off="Pasif" data-onstyle="success"  data-offstyle="danger" @if($article->status==1) checked @endif data-toggle="toogle">

                    <td>
                        <a href="#" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> </a>
                        <a href="{{route('admin.makaleler.edit',$article->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> </a>
                        <a href="#" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </a>

                    </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
