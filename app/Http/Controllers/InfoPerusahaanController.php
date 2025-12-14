<?php

namespace App\Http\Controllers;

use App\Models\Info_Perusahaans;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class InfoPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = Auth::user();
        $companyInfo = Info_Perusahaans::first();
        if ($user && $user->role === 'admin') {

            if (!$companyInfo) {
                return redirect()->route('companyInfo.create');
            }
            return view('admin_pages.info_perusahaan.index', compact('companyInfo'));
        }

        if (!$companyInfo) {
           return view('widget_messages_pages.error_messages');
        }
        return view('users_pages.contact', compact('companyInfo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_pages.info_perusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd((new Info_Perusahaans)->getTable());
        $validated = $request->validate([
            'alamat_perusahaan'      => 'required|string|max:255',
            'email_perusahaan'     => 'required|string|max:255',
            'telepon_perusahaan' => 'required|string|max:255',
        ]);

        Info_Perusahaans::create($validated);

        return redirect()
            ->route('companyInfo.index')
            ->with('success', 'Info Perusahaan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Info_Perusahaans $info_perusahaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Info_Perusahaans $companyInfo)
    {
        return view('admin_pages.info_perusahaan.edit', compact('companyInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Info_Perusahaans $companyInfo)
    {
        $validated = $request->validate([
            'alamat_perusahaan'  => 'required|string',
            'email_perusahaan'   => 'required|email',
            'telepon_perusahaan' => 'required|string|max:20',
        ]);

        $companyInfo->update($validated);

        return redirect()
            ->route('companyInfo.index')
            ->with('success', 'Informasi perusahaan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Info_Perusahaans $info_perusahaan)
    {
        //
    }
}
