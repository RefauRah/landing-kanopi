@extends('template_backend.home')
@section('sub-judul', 'Tambah Type')
@section('content')

    @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
    @endif

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('successupdate') }}
        </div>
    @endif

    <form action="{{ route('type.update', $types->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" name="name" value="{{ $types->name }}">
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan Type</button>
        </div>
    </form>
@endsection
