@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')


                <div class="col-md-9 max-auto">
                    <!-- Post preview-->
                    @foreach($articles as $article)
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                {{$article->title}}
                            </h2>
                            <h3 class="post-subtitle">{{$article->content}}</h3>
                        </a>
                        <p class="post-meta">

                            <a href="#">{{$article->getCategory->name}}</a>
                            <span class="float-right">{{$article->created_at->diffForHumans() }} </span>
                        </p>
                    </div>
                        @if(!$loop->last)
                            <hr>
                        @endif

                    @endforeach
                </div>
    @include('Front.widgets.categoryWidget')
        @endsection
