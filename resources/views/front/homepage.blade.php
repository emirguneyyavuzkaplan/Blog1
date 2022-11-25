@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')


    <div class="col-md-9 max-auto">
        @include('front.widgets.articleList')
    </div>
    @include('Front.widgets.categoryWidget')
@endsection
