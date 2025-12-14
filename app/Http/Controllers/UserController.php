<?php

namespace App\Http\Controllers;

use App\Models\articles;
use App\Models\Products;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
            $products = Products::all();
            $articles = Articles::all();
            return view("admin_pages.account_admin", compact('user', 'products', 'articles'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register_page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone'    => 'nullable|string|max:20',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imagePath = null; // Variabel untuk menyimpan path gambar

        if ($request->hasFile('image_url')) {
            // Ambil file yang diupload
            $image = $request->file('image_url');

            // Buat nama file unik
            $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Simpan file ke direktori 'public/images' (menggunakan symlink)
            // Pastikan Anda telah menjalankan 'php artisan storage:link' sebelumnya
            $imagePath = $image->storeAs('images', $fileName, 'public');
            // Hasilnya akan berupa 'images/namafileunik.ext'
        }

        User::create([
            'name'      => $request->name,
            'email'     => strtolower($request->email),
            'password' => Hash::make($request->password),
            'image_url' => $imagePath,
            'phone'     => $request->phone,
            'role'      => 'user',
        ]);

        return redirect()->route('login')->with('success', 'Register Berhasil!');
    }


    public function directLogin()
    {
        return view('login_page');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login
        if (Auth::attempt([
            'email' => strtolower($request->email),
            'password' => $request->password,
        ])) {
            $request->session()->regenerate();

            // ambil data user yang sudah login
            $user = Auth::user();

            // cek role dan redirect
            if ($user->role === 'admin') {
                return redirect()->route('auth.index'); // ganti dengan route admin kamu
            }

            if ($user->role === 'user') {
                return redirect()->route('auth.index');    // ganti dengan route user kamu
            }

            // default
            return redirect('/dashboard');
        }

        // Jika email/password salah
        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
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
