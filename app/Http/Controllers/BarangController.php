<?php

namespace App\Http\Controllers;

use App\Models\Bahanbaku;
use App\Models\Barang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::with('RBahan')->paginate(20);

        return view('barang.index', [
            'barang' => $barang,
        ]);
    }
    public function addView()
    {
        $bahan_ = Bahanbaku::all();
        return view('barang.create', compact('bahan_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_bahan' => $request->input('id_bahan'),
            'nama_barang' => $request->input('nama_barang'),
            'kategori' => $request->input('kategori'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Barang::create($data);

        return redirect()->route('barang.index');
    }
    public function edit($id)
    {
        $bahan_ = Bahanbaku::all();
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang', 'bahan_', ));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->kategori = $request->kategori;
        $barang->id_bahan = $request->id_bahan;
        $barang->save();

        return redirect('/barang/index');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect('/barang/index');
    }
}
