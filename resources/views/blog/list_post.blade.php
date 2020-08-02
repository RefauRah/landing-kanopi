@extends('template_blog.content')
@section('isi')
    @foreach($data as $list)
    <div class="post post-row">
        <a class="post-img img-thumbnail" href="{{route('blog.isi', $list->slug)}}"><img src="{{asset($list->gambar)}}" height="200px" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="#">{{$list->category['name']}}</a>
            </div>
            <h3 class="post-title"><a href="{{route('blog.isi', $list->slug)}}">{{$list->judul}}</a></h3>
            <ul class="post-meta">
                <li><a href="#">{{$list->users['name']}}</a></li>
                <li>{{$list->created_at->diffForHumans()}}</li>
            </ul>
        </div>
    </div>
    @endforeach
    <center>{{$data->links()}}</center>
@endsection
