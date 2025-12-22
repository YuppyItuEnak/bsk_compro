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
use Illuminate\Support\Facades\Storage;

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
            return redirect()->route('auth.index');
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

        return redirect()->route('dashboard.index');
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
        $user = Auth::user();
        if ($user->role === "admin") {
            return view('admin_pages.accounts.edit', compact('user'));
        } elseif ($user->role === "user") {
            return view('users_pages.accounts.edit', compact('user'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'phone' => ['nullable', 'string', 'max:20'],
            'password' => ['nullable', 'confirmed', 'min:8'],
            'file_upload' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        // Update basic profile data
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'] ?? null;

        // Update password (jika diisi)
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        // Upload foto profil (jika ada)
        if ($request->hasFile('file_upload')) {

            // Hapus foto lama jika ada
            if ($user->image_url && Storage::disk('public')->exists($user->image_url)) {
                Storage::disk('public')->delete($user->image_url);
            }

            $path = $request->file('file_upload')->store('users/profile', 'public');
            $user->image_url = $path;
        }

        $user->save();

        return redirect()
            ->route('auth.index')
            ->with('success', 'Profil berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
