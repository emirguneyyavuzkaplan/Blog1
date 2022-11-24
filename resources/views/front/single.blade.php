@extends('front.layouts.master')
@section('title',$article->title)
@section('bg',$article->image)

@section('content')
    <div class=" col-lg-8 col-xl-7">
        {!!$article->content!!}
        <br>
        <span class="text-danger">Okuma Sayisi :<b>{{$article->hit}}</b></span>
    </div>
    @include('Front.widgets.categoryWidget')

@endsection
