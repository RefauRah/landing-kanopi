@extends('template_backend.home')
@section('sub-judul', 'User')
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

    <a href="{{ route('user.create') }}" class="btn btn-info btn-sm">Tambah User</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama User</th>
                <th scope="col">Email</th>
                <th scope="col">Tipe</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($user as $result => $hasil)
            <tr>
                <th scope="row">{{ $result + $user->firstitem() }}</th>
                <td>{{ $hasil->name }}</td>
                <td>{{ $hasil->email }}</td>
                <td>
                    @if($hasil->tipe)
                        <span class="badge badge-info">Administrator</span>
                        @else
                        <span class="badge badge-warning">Author</span>
                    @endif
                </td>
                <td>

                    <form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('user.edit', $hasil->id) }}" class="btn btn-primary btn-sm">edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $user->links() }}
@endsection
