@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Anime</h1>
    <form action="{{ route('anime.update', $anime) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $anime->judul }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" value="{{ $anime->genre }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Sinopsis</label>
            <textarea name="sinopsis" class="form-control" required>{{ $anime->sinopsis }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Rilis</label>
            <input type="number" name="tahun_rilis" class="form-control" value="{{ $anime->tahun_rilis }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
