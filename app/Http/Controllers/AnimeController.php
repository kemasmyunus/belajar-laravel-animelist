<?php
namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Tambahkan ini

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::all();
        return view('anime.index', compact('animes'));
    }

    public function create()
    {
        return view('anime.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'genre' => 'required',
            'sinopsis' => 'required',
            'tahun_rilis' => 'required|integer',
        ]);

        Anime::create($request->all());
        return redirect()->route('anime.index')->with('success', 'Anime berhasil ditambahkan');
    }

    public function edit(Anime $anime)
    {
        return view('anime.edit', compact('anime'));
    }

    public function update(Request $request, Anime $anime)
    {
        $request->validate([
            'judul' => 'required',
            'genre' => 'required',
            'sinopsis' => 'required',
            'tahun_rilis' => 'required|integer',
        ]);

        $anime->update($request->all());
        return redirect()->route('anime.index')->with('success', 'Anime berhasil diperbarui');
    }

    public function destroy(Anime $anime)
    {
        $anime->delete();
        return redirect()->route('anime.index')->with('success', 'Anime berhasil dihapus');
    }
}
