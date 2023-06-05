<?php

namespace App\Http\Controllers;
use App\Models\Gudangbarang;
use App\Models\Barang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GudangbarangController extends Controller
{
    public function index()
    {
        $gudangbarang = Gudangbarang::with('RBarang')->paginate(5);

        return view('gudangbarang.index', [
            'gudangbarang' => $gudangbarang,
        ]);
    }
    public function addView()
    {
        $barang_ = Barang::all();
        return view('gudangbarang.create',compact('barang_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_barang' => $request->input('id_barang'),
            'jumlah_barang' => $request->input('jumlah_barang'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Gudangbarang::create($data);

        return redirect()->route('gudangbarang.index');
}
public function edit($id)
    {
        $barang_ = Barang::all();
        $gudangbarang = Gudangbarang::findOrFail($id);
        return view('gudangbarang.edit', compact('gudangbarang','barang_'));
    }

    public function update(Request $request, $id)
    {
        $gudangbarang = Gudangbarang::findOrFail($id);
        $gudangbarang->id_barang = $request->id_barang;
        $gudangbarang->jumlah_barang = $request->jumlah_barang;
        $gudangbarang->save();

        return redirect('/gudangbarang');
}

    public function destroy($id)
    {
        $gudangbarang = Gudangbarang::findOrFail($id);
        $gudangbarang->delete();
        return redirect('/gudangbarang');
}
}
