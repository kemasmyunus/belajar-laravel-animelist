@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Anime</h1>
    <form action="{{ route('anime.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Sinopsis</label>
            <textarea name="sinopsis" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Rilis</label>
            <input type="number" name="tahun_rilis" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
