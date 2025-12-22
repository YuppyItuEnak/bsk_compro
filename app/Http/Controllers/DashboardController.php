<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Info_Perusahaans;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Polyfill\Intl\Idn\Info;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();


        if ($user && $user->role === 'admin') {
            $totalProducts = Products::count();
            $totalArticles = Articles::count();

            $totalUser = User::where('role', 'user')->count();
            // Artikel 7 hari terakhir
            $recentArticles = Articles::where('created_at', '>=', now()->subDays(7))->count();

            // Aktivitas terbaru (product + article)
            $activities = collect()
                ->merge(
                    Products::selectRaw("
                    'product' as type,
                    nama_produk as title,
                    harga_produk as subtitle,
                    created_at,
                    NULL as waktu_publikasi
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
                    created_at,
                    waktu_publikasi
                ")
                        ->latest()
                        ->limit(10)
                        ->get()
                )
                ->merge(
                    Info_Perusahaans::selectRaw("
                    'companyInfo' as type,
                    alamat_perusahaan as title,
                    email_perusahaan as subtitle,
                    created_at,
                    NULL as waktu_publikasi
                    ")->latest()
                        ->limit(10)
                        ->get()
                )
                ->sortByDesc('created_at')
                ->take(10);

            return view('admin_pages.dashboard_admin', compact(
                'totalProducts',
                'totalArticles',
                'totalUser',

                'recentArticles',
                'activities'
            ));
        }
        $productUnggulan = Products::all();
        return view("users_pages.home", compact('user', 'productUnggulan'));
    }

    public function userlist()
    {
        // if (Auth::user()->role !== 'admin') {
        //     abort(403, 'Unauthorized');
        // }

        $user = User::where('role', 'user')->get();

        return view('admin_pages.user_index_page', compact('user'));
        // return response('VIEW DIPANGGIL');

        // return view('admin_pages.user_index_page');
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
    public function show(string $id) {}

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
    public function destroy(User $user)
    {
       //
    }

    public function deleteuser (User $user){
        // $user = User::where('role', 'user')->get();
        // dd($user);
        if ($user->image_url) {
            Storage::disk('public')->delete($user->image_url);
        }

        $user->delete();

        return redirect()
            ->route('userlist')
            ->with('success', 'Product berhasil dihapus');
    }
}
