@extends('template_backend.home')
@section('sub-judul', 'Tag')
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

    <a href="{{ route('tag.create') }}" class="btn btn-info btn-sm">Tambah Tag</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tag</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tag as $result => $hasil)
            <tr>
                <th scope="row">{{ $result + $tag->firstitem() }}</th>
                <td>{{ $hasil->name }}</td>
                <td>

                    <form action="{{ route('tag.destroy', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('tag.edit', $hasil->id) }}" class="btn btn-primary btn-sm">edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $tag->links() }}
@endsection
