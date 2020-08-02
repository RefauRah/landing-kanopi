@extends('template_blog.content')
@section('isi')
<!-- <div class="jumbotron">
    <div class="container">
        <img src="{{asset('public/uploads/post/1583676890membran4.jpg')}}" width="100%" height="200px" alt="">
    </div>
</div> -->
<div class="row">
    <div class="col-md-6">
        <h1>Tentang Kami</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis architecto, animi eum distinctio culpa at quam quidem neque repellendus laudantium reprehenderit eligendi quaerat, laboriosam voluptates esse molestias ut cum quasi.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia quis, voluptates impedit, assumenda itaque delectus placeat reiciendis nostrum ipsam dolorum atque eos saepe dolor deserunt dignissimos quasi velit, quibusdam natus.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum rerum id quam hic. Reprehenderit explicabo voluptates neque nulla dolor excepturi veritatis, tempora earum quis non. Fugit sit iure recusandae!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, illum. Voluptate atque magnam quia minima distinctio omnis ex deserunt sed illo molestiae, voluptatum numquam natus alias perspiciatis optio repudiandae corrupti.</p>
    </div>
    <div class="col-md-6">
        <img src="{{asset('public/uploads/post/1583676890membran4.jpg')}}" width="100%" alt="">
    </div>
</div>
<br> <br> <hr> <br>
<div class="row">
    <div class="col-md-6">
        <h2>Kontak Kami</h2>
        <form>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Nama">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Pesan</label>
            <textarea class="form-control" name="text" id="" cols="30" rows="5" placeholder="Pesan..."></textarea>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
    <div class="col-md-6">
        <h2>Alamat</h2>
        <p>Jl. RH.Didi Sukardi Km.2 (Doa Ibu) Rt.06 Rw.02 Gedongpanjang - Kota Sukabumi</p>
    </div>
</div>
@endsection