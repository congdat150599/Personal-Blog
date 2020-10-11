<div class="page-wrapper">
	<div class="page_content">
		<div class="content">
			@foreach($categories as $category)
			<div class="items">
				<img src="{{ asset('img/category.jp')}}g" alt="" data-aos="zoom-in">
				<div class="letter">	
					<a href="{{route('category', $category->slug)}}">{{$category->title}}</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div> 

