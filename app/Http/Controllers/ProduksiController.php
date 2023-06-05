<?php

namespace App\Http\Controllers;
use App\Models\Produksi;
use App\Models\Barang;
use App\Models\Peralatan;
use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function index()
    {
        $produksi = Produksi::with('RBarang','RPeralatan','RPegawai')->paginate(1000);

        return view('produksi.index', [
            'produksi' => $produksi,
        ]);
    }
    public function addView()
    {
        $barang_ = Barang::all();
        $alat_ = Peralatan::all();
        $pegawai_ = Pegawai::all();
        return view('produksi.create',compact('barang_','alat_','pegawai_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_barang' => $request->input('id_barang'),
            'id_alat' => $request->input('id_alat'),
            'id_pegawai' => $request->input('id_pegawai'),
            'jumlah_produksi' => $request->input('jumlah_produksi'),
            'biaya_produksi' => $request->input('biaya_produksi'),
            'tanggal' => $request->input('tanggal'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Produksi::create($data);

        return redirect()->route('produksi.index');
}
public function edit($id)
    {
        $barang_ = Barang::all();
        $alat_ = Peralatan::all();
        $pegawai_ = Pegawai::all();
        $produksi = Produksi::findOrFail($id);
        return view('produksi.edit', compact('produksi','barang_','alat_','pegawai_' ));
    }

    public function update(Request $request, $id)
    {
        $produksi = Produksi::findOrFail($id);
        $produksi->id_barang = $request->id_barang;
        $produksi->id_alat = $request->id_alat;
        $produksi->id_pegawai = $request->id_pegawai;
        $produksi->jumlah_produksi = $request->jumlah_produksi;
        $produksi->biaya_produksi = $request->biaya_produksi;
        $produksi->tanggal = $request->tanggal;
        $produksi->save();

        return redirect('/produksi/index');
}

    public function destroy($id)
    {
        $produksi = Produksi::findOrFail($id);
        $produksi->delete();
        return redirect('/produksi/index');
}
}
