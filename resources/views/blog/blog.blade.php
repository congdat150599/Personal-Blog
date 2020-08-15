@extends('layouts.main')
@section('content')
<div class="blog">
	<div class="left-blog">
		@foreach($posts_blog as $post)
		<div class="block-blog">
			<div class="image-blog">
				@if($post->image_url)
				<img src="{{$post->image_url}}" alt="image post">
				@endif
			</div>
			<div class="up-block-blog">
				<div class="title-blog">
					<a href="{{route('home.show', $post->slug)}}"><h1>{{$post->title}}</h1></a>
				</div>
				<div class="excerpt-blog">
					{!! $post->excerpt_html !!}
				</div>
			</div>
			<div class="down-block-blog">
				<div class="author">
					<i class="fa fa-user content-post-user"><span>{{$post->author->name}}</span></i>
				</div>
				<div class="calendar" style="flex-shrink: 0">
					<i class="fas fa-calendar content-post-calendar"><span>{{$post->date}}</span></i>
				</div>
				<div class="tag-blog">
					<i class="fas fa-tag">Blog</i>
				</div>
				<div class="comment-blog">
					<a href="#"><i class="fas fa-comment">Comment</i></a>
				</div>
				<div class="read-more">
					<p>Continue Reading</p>
					<i class="fas fa-angle-double-right"></i>
				</div>
			</div>
		</div>
		@endforeach
		<nav>
		  {{$posts_blog->links()}}
	    </nav>
	</div>
	
	<div class="right-blog">
		<div class="block-category">
			<div class="category">
				<h1>Category</h1>
			</div>
			<div class="content-cate">
				<div class="cate-1">
					<a href="#">
						<i class="fas fa-chevron-right"></i>
						<p>Chau Au</p>
					</a>
					<div class="number">
						<span>10</span>
					</div>
				</div>
				<div class="cate-1">
					<a href="#">
						<i class="fas fa-chevron-right"></i>
						<p>Chau Au</p>
					</a>
					<div class="number">
						<span>10</span>
					</div>
				</div>
				<div class="cate-1">
					<a href="#">
						<i class="fas fa-chevron-right"></i>
						<p>Chau Au</p>
					</a>
					<div class="number">
						<span>10</span>
					</div>
				</div>
				<div class="cate-1">
					<a href="#">
						<i class="fas fa-chevron-right"></i>
						<p>Chau Au</p>
					</a>
					<div class="number">
						<span>10</span>
					</div>
				</div>
			</div>
		</div>
		<div class="popular-blog">
			<div class="title-pop">
				<h1>Popular Post</h1>
			</div>
			<div class="content-pop">
				<div class="pop-1">
					<div class="image">
						<img src="#" alt="">
					</div>
					<div class="detail">
						<div class="name-post">
							<p>Blog 1</p>
						</div>
						<div class="date">
							<p>36 minutes ago</p>
						</div>
					</div>
				</div>
				<div class="pop-1">
					<div class="image">
						<img src="#" alt="">
					</div>
					<div class="detail">
						<div class="name-post">
							<p>Blog 1</p>
						</div>
						<div class="date">
							<p>36 minutes ago</p>
						</div>
					</div>
				</div>
				<div class="pop-1">
					<div class="image">
						<img src="#" alt="">
					</div>
					<div class="detail">
						<div class="name-post">
							<p>Blog 1</p>
						</div>
						<div class="date">
							<p>36 minutes ago</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection