@extends('layouts.main')
@section('content')
<div class="hero top-hero">
    <div class="text">
        <h2 class="title">{{$post->title}}</h2>
        <div class="description">
            <div class="circle-img author-avatar">
                <img src="/images/avatar.png" alt="author">
            </div>
            <div class="details">
                <p class="author">{{$post->author->name}}</p>
                <p class="date">{{$post->date}}</p>
            </div>
        </div>
    </div>
    @if($post->image_url)
    <div class="circle-img post-thumb">
        <img src="{{$post->image_url}}">
    </div>
    @endif
</div>
<section class="post-content">
    <p>{!! $post->body_html !!}</p>
</section>
<section class="rec-posts">
    <div class="separator rec-sep">
        <hr />
        <div class="text">RECOMMENDED</div>
    </div>
    <div class="grid-list articles">
        <div class="card article">
            <div class="thumb"></div>
            <h3 class="title">Another Post that you may Care about</h3>
        </div>
        <div class="card article">
            <div class="thumb"></div>
            <h3 class="title">Another Post that you may Care about</h3>
        </div>
        <div class="card article">
            <div class="thumb"></div>
            <h3 class="title">Another Post that you may Care about</h3>
        </div>
        <div class="card article">
            <div class="thumb"></div>
            <h3 class="title">Another Post that you may Care about</h3>
        </div>
    </div>
</section>
@endsection