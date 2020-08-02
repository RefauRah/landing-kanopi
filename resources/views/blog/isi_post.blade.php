@extends('template_blog.content')
@section('isi')
@foreach($data as $post)
		<!-- PAGE HEADER -->
		<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url({{asset($post->gambar)}});" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="#">{{$post->category['name']}}</a>
						</div>
						<h1>{{$post->judul}}</h1>
						<ul class="post-meta">
							<li><a href="#">{{$post->users['name']}}</a></li>
							<li>{{$post->created_at->diffForhUmans()}}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
        <!-- /PAGE HEADER -->
        <br>
        <div class="section-row">
            {!! $post->content !!}
        </div>
@endforeach
@endsection
