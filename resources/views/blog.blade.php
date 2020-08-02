<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- META UNTUK GOOGLE MAX:100-140 -->
    <meta name="description" content=""/>

    <!-- META UNTUK FACEBOOK -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">

    <!-- META UNTUK TWITTER -->
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:card" content="">

	<title>Nugraha Jaya</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<!-- <link type="text/css" rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

</head>

<body>
	<!-- HEADER -->
    <br> <br>
    @include('template_blog.header')
	<!-- /HEADER -->

    <!-- SECTION -->
    <div class="section">
    <!-- container -->
        <div class="container">
            @include('template_blog.jumbotron')
        </div>
    <!-- /container -->
    </div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-9">                    
                    <!-- Postingan Terbaru -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">Postingan terbaru</h2>
                            </div>
                        </div>
                        <!-- post -->
                        @foreach($data as $pos)
                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img img-thumbnail" href="{{route('blog.isi', $pos->slug)}}"><img src="{{asset($pos->gambar)}}" height="250px" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="#">{{$pos->category['name']}}</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{route('blog.isi', $pos->slug)}}">{{$pos->judul}}</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#">{{$pos->users['name']}}</a></li>
                                        <li>{{$pos->created_at->diffForHumans()}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- /post -->
                    </div>
                    <!-- /Postingan Terbaru -->

                    <!-- Produk Unggulan -->
                    <div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Produk Unggulan</h2>
							</div>
						</div>
                        <!-- post -->
                        @foreach($data2 as $pos)
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="{{route('blog.isi', $pos->slug)}}"><img src="{{asset($pos->gambar)}}" height="150px" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$pos->category['name']}}</a>
									</div>
									<h3 class="post-title title-sm"> <a href="{{route('blog.isi', $pos->slug)}}">{{$pos->judul}}</a></h3>
									<ul class="post-meta">
                                        <li><a href="#">{{$pos->users['name']}}</a></li>
                                        <li>{{$pos->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
                        </div>
                        @endforeach
						<!-- /post -->					
					</div>                 
                    <!-- /Produk Unggulan -->
                    <br>
                    <!-- Semua Produk -->
                    <div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Semua Produk</h2>
							</div>
						</div>
                        <!-- post -->
                        <div class="col-md-12">
                            <!-- post -->
                            @foreach($data3 as $pos)
                            <div class="post post-row">
                                <a class="post-img" href="{{route('blog.isi', $pos->slug)}}"><img src="{{asset($pos->gambar)}}" height="150px" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">{{$pos->category['name']}}</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{route('blog.isi', $pos->slug)}}">{{$pos->judul}}</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#">{{$pos->users['name']}}</a></li>
                                        <li>{{$pos->created_at->diffForHumans()}}</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                            @endforeach
                            <!-- /post -->
                            <div class="section-row loadmore text-center">
                                <a href="#" class="primary-button">Load More</a>
                            </div>
				        </div>
						<!-- /post -->					
					</div>                 
                    <!-- /Semua Produk -->
                </div>
                <!-- widget -->
				@include('template_blog.widget')
                <!-- /widget -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
    <!-- /SECTION -->   

	<!-- FOOTER -->
        @include('template_blog.footer')
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/main.js')}}"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

</body>

</html>

