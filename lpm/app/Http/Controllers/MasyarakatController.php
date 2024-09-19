<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasyarakatModel;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\RedirectResponse;


class MasyarakatController extends Controller
{
    public function masyarakat()
    {
        $masyarakat = masyarakatModel::select('*')->get();
        return view('masyarakat/datamasyarakat', ['masyarakat' => $masyarakat]);
    }

    public function show($id)
{
    $masya = MasyarakatModel::findOrFail($id);
    return view('masyarakat.detail', compact('masya'));
}


    public function tambah()
    {
        return view('masyarakat.tambah'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|size:16',
            'nokk' => 'required|string|size:16',
            'fotoktp' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fotokk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kab_kota' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kelurahan_desa' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'rt' => 'required|integer',
            'rw' => 'required|integer',
            'penghasilan_sebpandemi' => 'required|integer',
            'penghasilan_sudpandemi' => 'required|integer',
            'alasan' => 'required|string|max:255',
        ]);
    
        $fotoktp = $request->file('fotoktp') ? $request->file('fotoktp')->store('foto_ktp', 'public') : null;
        $fotokk = $request->file('fotokk') ? $request->file('fotokk')->store('foto_kk', 'public') : null;
    
        MasyarakatModel::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'nokk' => $request->nokk,
            'fotoktp' => $fotoktp,
            'fotokk' => $fotokk,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'provinsi' => $request->provinsi,
            'kab_kota' => $request->kab_kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan_desa' => $request->kelurahan_desa,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'penghasilan_sebpandemi' => $request->penghasilan_sebpandemi,
            'penghasilan_sudpandemi' => $request->penghasilan_sudpandemi,
            'alasan' => $request->alasan,
        ]);
    
        return redirect()->route('masyarakat')->with('message', 'Data berhasil ditambahkan');
    }
    
    public function destroy($id)
    {
        $masyarakat = MasyarakatModel::findOrFail($id);
        $masyarakat->delete();

        return redirect()->route('masyarakat')->with('message', 'Data Dihapus');
    }
}
