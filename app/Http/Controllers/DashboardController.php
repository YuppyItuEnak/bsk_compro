<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->role == "user") {
            return view("users_pages.dashboard_user", compact('user'));
        } elseif ($user->role == "admin") {
            $totalProducts = Products::count();
            $totalArticles = Articles::count();

            // Artikel 7 hari terakhir
            $recentArticles = Articles::where('created_at', '>=', now()->subDays(7))->count();

            // Aktivitas terbaru (product + article)
            $activities = collect()
                ->merge(
                    Products::selectRaw("
                    'product' as type,
                    nama_produk as title,
                    harga_produk as subtitle,
                    created_at
                ")
                        ->latest()
                        ->limit(10)
                        ->get()
                )
                ->merge(
                    Articles::selectRaw("
                    'article' as type,
                    judul_artikel as title,
                    isi_artikel as subtitle,
                    created_at
                ")
                        ->latest()
                        ->limit(10)
                        ->get()
                )
                ->sortByDesc('created_at')
                ->take(10);

            return view('admin_pages.dashboard_admin', compact(
                'totalProducts',
                'totalArticles',
                'recentArticles',
                'activities'
            ));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
