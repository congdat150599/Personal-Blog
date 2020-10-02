@extends('layouts.main')
@section('content')

<div class="hero top-hero">
    <div class="post-thumb">
        <img src="{{asset('img/'. $post->image)}}">
    </div>
    <div class="text">
        <h2 class="title">{{$post->title}}</h2>
        <div class="description">
            <div class="details">
                <li class="fas fa-user"></li>&nbsp;<p class="author">{{$post->author->name}},&nbsp; </p>
                <p class="date">{{$post->date}}&nbsp;|&nbsp;&nbsp;</p>
                <?php 
                   $countView = $post->view_count;
                ?>
                <span><i class="fas fa-eye"></i>&nbsp;{{$countView}} {{Str::plural('view', $countView)}}</span>
            </div>
        </div>
    </div>
</div>

<section class="post-content" id="post-comments">
    {!! $post->body_html !!}
</section>
<div class="line">
    
</div>
<section class="comment">
    <!-- @if(session('message'))
       <div class="alert alert-info">
           {{session('message')}}
       </div>
    @endif -->
    {!! Form::open(['route' => ['blog.comments', $post->slug]]) !!}
        <div class="input_comment">
            <div class="body {{$errors->has('body') ? 'has-error' : ''}}">
                <!-- <textarea name="content" id="comment" placeholder="Aa..."></textarea> -->
                {!! Form::textarea('body', null, ['row' => 6, 'class' => 'form-control required', 'placeholder' => 'Aa...']) !!}
                @if($errors->has('author_name', 'author_email'))
                    <span class="help-block">
                        <span style="margin-left:31rem;" class="alert alert-warning">Bạn cần điển thông tin bên dưới để comment!!!</span>
                    </span>
                @endif
             </div>
            <div class="icon">
                <i class="far fa-smile"></i>
            </div>
        </div>
        <div class="send-btn">
            <button type="submit"><i class="fas fa-arrow-right"></i></button>
            <!-- <button type="submit" class="btn btn-success">Submit</button> -->
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">

                    <div class="logo">
                        <span class="why">Comments</span>
                        <div id="heart"></div>
                        <!-- <span class="book">Book</span> -->
                    </div>
                </a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="form-group required {{$errors->has('name') ? 'has-error' : ''}}">
                        <label for="name">Name</label>
                        {!! Form::text('author_name', null, ['class' => 'form-control']) !!}
                    </div>
                     <div class="form-group required {{$errors->has('email') ? 'has-error' : ''}}">
                        <label for="email">Email</label>
                        {!! Form::text('author_email', null, ['class' => 'form-control']) !!}
                    </div>
                    <!--  <div class="form-group required">
                        <label for="website">Website</label>
                        {!! Form::text('author_url', null, ['class' => 'form-control']) !!}
                    </div> -->
                </div>
            </div>
        </div>
        
    {!! Form::close() !!}
</section>
<article class="show-comments">
    @foreach($postComments as $comment)
    <div class="post-comment">
        <img src="{{ asset('img/reader.png')}}" alt="reader">
        <div class="content">
            <div class="name">
                <h1>{{$comment->author_name}}</h1>
            </div>
            <div class="calendar">
                <p><li class="fa fa-calendar"></li>&nbsp; {{ $comment->date }}</p>
            </div>
            <div class="body">
                {!! $comment->body_html !!}
            </div>
        </div>
    </div>
    @endforeach
    <nav>
        {!! $postComments->links() !!}
    </nav>
</article>
<section class="post-info-author">
    <div class="info-author">
    <div class="picture-author">
        <img src="{{ asset('img/myself.jpg')}}">
    </div>
    <div class="info">
        <div class="name">
            <a href="{{route('author', $post->author->slug)}}"><h1>{{$post->author->name}}</h1></a>
        </div>
        <div class="number-posts">
            <?php
               $countPosts = $post->author->posts->count();
            ?>
            <p><i class="fas fa-folder">&nbsp;&nbsp;{{$countPosts}} {{Str::plural('post', $countPosts)}}</i></p>            
        </div>
        <div class="description">
            <p>{{$post->author->bio}}</p>
        </div>
    </div>
</div>
</section>


<!-- <section class="rec-posts">
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
</section> -->
@endsection