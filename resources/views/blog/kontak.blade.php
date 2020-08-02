@extends('template_blog.content')
@section('isi')
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