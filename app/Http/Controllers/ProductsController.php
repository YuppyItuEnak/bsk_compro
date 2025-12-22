<?php

namespace App\Http\Controllers;

use App\Models\Info_Perusahaans;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        $user = Auth::user();

        if ($user && $user->role === 'admin') {
            return view('admin_pages.products.index', compact('products'));
        }

        // DEFAULT: user / guest
        return view('users_pages.product', compact('products'));
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
            'is_favorite'      => 'required|boolean',
            'gambar_produk'    => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload gambar
        $validated['gambar_produk'] = $request->file('gambar_produk')
            ->store('products', 'public');

        Products::create($validated);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        $companyPhoneNumber = Info_Perusahaans::where('telepon_perusahaan', '!=', null)
            ->value('telepon_perusahaan');

        // $products = Products::all();
        return view('users_pages.detail_product', compact('product', 'companyPhoneNumber'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('admin_pages.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        $validated = $request->validate([
            'nama_produk'      => 'required|string|max:255',
            'harga_produk'     => 'required|integer|min:0',
            'deskripsi_produk' => 'required|string',
            'is_favorite'      => 'required|boolean',
            'gambar_produk'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar_produk')) {
            $validated['gambar_produk'] = $request->file('gambar_produk')
                ->store('products', 'public');
        }

        $product->update($validated);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Product berhasil dihapus');
    }
}
