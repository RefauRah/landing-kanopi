<!-- FOOTER -->
<footer id="footer">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="{{ url('/') }}" class="logo"><h1 style="color:white;">Nugraha Jaya</h1></a>                                            
                    </div>
                    <p>Jl. RH.Didi Sukardi Km.2 (Doa Ibu) Rt.06 Rw.02 Gedongpanjang - Kota Sukabumi</p>                        
                    <ul class="contact-social">
                        <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Categories</h3>
                    <div class="category-widget">
                        <ul>
                            @foreach($category_widget as $kategori)
                            <li><a href="{{route('blog.category', $kategori->slug)}}">{{$kategori->name}} <span>{{$kategori->post->count()}}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Tags</h3>
                    <div class="tags-widget">
                        <ul>
                        @foreach($category_widget as $kategori)
                            <li><a href="{{route('blog.category', $kategori->slug)}}">{{$kategori->name}}</a></li>
                        @endforeach                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Info Lanjut</h3>
                    <div class="newsletter-widget">
                        <form>
                            <p>Jl. RH.Didi Sukardi Km.2 (Doa Ibu) Rt.06 Rw.02 Gedongpanjang - Kota Sukabumi</p>
                            <input class="input" name="newsletter" placeholder="Enter Your Email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="footer-bottom row">
            <div class="col-md-6 col-md-push-6">
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="footer-copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Nugraha Jaya
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->
