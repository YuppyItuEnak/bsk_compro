<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Articles::all();
        $user = Auth::user();

        if ($user && $user->role === 'admin') {
            return view('admin_pages.articles.index', compact('articles'));
        }

        return view('users_pages.article', compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_pages.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_artikel'   => 'required|string|max:255',
            'isi_artikel'     => 'required|string',
            'gambar_artikel'  => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'waktu_publikasi' => 'nullable|date',
        ]);

        // Upload gambar
        if ($request->hasFile('gambar_artikel')) {
            $validated['gambar_artikel'] = $request
                ->file('gambar_artikel')
                ->store('articles', 'public');
        }

        Articles::create($validated);

        return redirect()
            ->route('articles.index')
            ->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(articles $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(articles $articles)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(articles $articles)
    {
        //
    }
}
