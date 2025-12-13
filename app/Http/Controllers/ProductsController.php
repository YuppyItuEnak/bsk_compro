<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();

        return view('admin_pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin_pages.products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'nama_produk'      => 'required|string|max:255',
            'harga_produk'     => 'required|integer|min:0',
            'deskripsi_produk' => 'required|string',
            'gambar_produk'    => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload gambar
        $validated['gambar_produk'] = $request->file('gambar_produk')
            ->store('products', 'public');

        Products::create($validated);

        return redirect()
            ->route('adminProducts.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        // return view('admin_pages.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
