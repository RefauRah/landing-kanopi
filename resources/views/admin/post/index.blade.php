@extends('template_backend.home')
@section('sub-judul', 'Post')
@section('content')

    @if(Session::has('successupdate'))
        <div class="alert alert-success" role="alert">
            {{ Session('successupdate') }}
        </div>
    @endif

    @if(Session::has('successdelete'))
        <div class="alert alert-danger" role="alert">
            {{ Session('successdelete') }}
        </div>
    @endif

    <a href="{{ route('post.create') }}" class="btn btn-info btn-sm">Tambah Post</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Post</th>
                <th scope="col">kategori</th>
                <th scope="col">list Tag</th>
                <th scope="col">Creator</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($post as $result => $hasil)
            <tr>
                <th scope="row">{{ $result + $post->firstitem() }}</th>
                <td>{{ $hasil->judul }}</td>
                <td>{{ $hasil->category['name'] }}</td>
                <td>
                @foreach($hasil->tags as $tag)
                    <ul>
                    <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
                    </ul>
                @endforeach
                </td>
                <td>{{ $hasil->users['name'] }}</td>
                <td><img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:100px"></td>
                <td>
                    <form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-primary btn-sm">edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $post->links() }}
@endsection
