
<!-- Introduce -->
<div class="introduce">
     <!-- slider -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>
	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	        <div class="item active">
	            <img src="{{URL::asset('img/style1.png')}}" alt="Los Angeles" style="width:100%; height: 500px;">
	            <div class="intro">“Đích đến của chúng ta không phải là một vùng đất, mà là một cách nhìn mới.”<br> – Henry Miller</div>
	        </div>

	        <div class="item">
	            <img src="{{URL::asset('img/style2.png')}}" alt="Chicago" style="width:100%; height: 500px;">
	            <div class="intro">Cuộc sống, ngay cả khi có một ngàn lý do để làm cho bạn khóc, bạn vẫn phải tìm một triệu lý do để giữ nụ cười.</div>
	        </div>
	    
	        <div class="item">
	            <img src="{{URL::asset('img/style3.png')}}" alt="New york" style="width:100%; height: 500px;">
	            <div class="intro"></div>
	        </div>
	    </div>
	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left"></span>
	        <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right"></span>
	        <span class="sr-only">Next</span>
	    </a>
	</div>
    <!-- end slider -->
</div>
<!-- End Introduce -->