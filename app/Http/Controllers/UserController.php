<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = Auth::user();
        return view("users_pages.dashboard_user", compact('user'));
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
            'image_url' => 'nullable|string',
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => strtolower($request->email),
            'password' => Hash::make($request->password),
            'image_url' => $request->image_url,
            'role'      => 'user',
        ]);

        return redirect()->route('auth.login')->with('success', 'Register Berhasil!');
    }


    public function directLogin(){
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
                // return redirect()->route('admin.home');   // ganti dengan route admin kamu
                return back()->withErrors([
                    'role' => 'admin',
                ]);
            }

            if ($user->role === 'user') {
                return view('users_pages.home');    // ganti dengan route user kamu
            }

            // default
            return redirect('/dashboard');
        }

        // Jika email/password salah
        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
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
