@extends('template_backend.home')
@section('sub-judul', 'Post Yang Telah Dihapus')
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

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Post</th>
                <th scope="col">kategori</th>
                <th scope="col">list Tag</th>
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
                        <li>{{ $tag->name }}</li>
                    </ul>
                @endforeach
                </td>
                <td><img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:100px"></td>
                <td>
                    <form action="{{ route('post.kill', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('post.restore', $hasil->id) }}" class="btn btn-info btn-sm">Restore</a>
                        <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $post->links() }}
@endsection
