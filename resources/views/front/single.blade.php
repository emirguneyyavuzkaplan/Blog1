@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')



                <div class=" col-lg-8 col-xl-7">
                   {{$article->content}}
                </div>
                @include('Front.widgets.categoryWidget')

@endsection
