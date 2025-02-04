
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Daftar Anime</h1>
    <a href="{{ route('anime.create') }}" class="btn btn-primary mb-3">Tambah Anime</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Genre</th>
                <th>Sinopsis</th>
                <th>Tahun Rilis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animes as $anime)
            <tr>
                <td>{{ $anime->judul }}</td>
                <td>{{ $anime->genre }}</td>
                <td>{{ Str::limit($anime->sinopsis, 50) }}</td>
                <td>{{ $anime->tahun_rilis }}</td>
                <td>
                    <a href="{{ route('anime.edit', $anime) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('anime.destroy', $anime) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
