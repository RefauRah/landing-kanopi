<div class="col-md-3">
     <!-- newsletter widget -->
     <div class="aside-widget">
        <div class="section-title">
            <h2 class="title">Info Lanjut</h2>
        </div>
        <div class="newsletter-widget">
            <form>
                <p>Jl. RH.Didi Sukardi Km.2 (Doa Ibu) Rt.06 Rw.02 Gedongpanjang - Kota Sukabumi</p>
                <input class="input" name="newsletter" placeholder="Enter Your Email">
                <button class="primary-button">Subscribe</button>
            </form>
        </div>
    </div>
    <!-- /newsletter widget -->
    
    <!-- category widget -->
    <div class="aside-widget">
        <div class="section-title">
            <h2 class="title">Kategori</h2>
        </div>
        <div class="category-widget">
            <ul>
                @foreach($category_widget as $kategori)
                <li><a href="{{route('blog.category', $kategori->slug)}}">{{$kategori->name}} <span>{{$kategori->post->count()}}</span></a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- /category widget -->   

    <!-- post widget -->
    <div class="aside-widget">
        <div class="section-title">
            <h2 class="title">Postingan Populer</h2>
        </div>
        @foreach($hot as $post)
        <!-- post -->
        <div class="post post-widget">
            <a class="post-img img-thumbnail" href="{{route('blog.isi', $post->slug)}}"><img src="{{asset($post->gambar)}}" height="80px" alt=""></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="#">{{$post->category['name']}}</a>
                </div>
                <h3 class="post-title"><a href="{{route('blog.isi', $post->slug)}}">{{$post->judul}}</a></h3>
            </div>
        </div>
        <!-- /post -->
        @endforeach
    </div>
    <!-- /post widget -->
</div>
