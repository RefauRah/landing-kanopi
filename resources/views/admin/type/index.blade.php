@extends('template_backend.home')
@section('sub-judul', 'Type')
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

    <a href="{{ route('type.create') }}" class="btn btn-info btn-sm">Tambah Type</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Type</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($type as $result => $hasil)
            <tr>
                <th scope="row">{{ $result + $type->firstitem() }}</th>
                <td>{{ $hasil->name }}</td>
                <td>

                    <form action="{{ route('type.destroy', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('type.edit', $hasil->id) }}" class="btn btn-primary btn-sm">edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $type->links() }}
@endsection
