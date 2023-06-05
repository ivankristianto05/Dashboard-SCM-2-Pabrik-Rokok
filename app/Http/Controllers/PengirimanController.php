<?php

namespace App\Http\Controllers;
use App\Models\Outlet;
use App\Models\Barang;
use App\Models\Pengiriman;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index()
    {
        $pengiriman= Pengiriman::with('ROutlet','RBarang')->paginate(1000);

        return view('pengiriman.index', [
            'pengiriman' => $pengiriman,
        ]);
    }
    public function addView()
    {
        $outlet_ = Outlet::all();
        $barang_ = Barang::all();
        return view('pengiriman.create', compact('outlet_','barang_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_outlet' => $request->input('id_outlet'),
            'id_barang' => $request->input('id_barang'),
            'biaya_pengiriman' => $request->input('biaya_pengiriman'),
            'tanggal' => $request->input('tanggal'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        pengiriman::create($data);

        return redirect()->route('pengiriman.index');
}
public function edit($id)
    {
        $outlet_ = Outlet::all();
        $barang_ = Barang::all();
        $pengiriman = Pengiriman::findOrFail($id);
        return view('pengiriman.edit', compact('pengiriman','outlet_','barang_', ));
    }

    public function update(Request $request, $id)
    {
        $pengiriman = Pengiriman::findOrFail($id);
        $pengiriman->id_outlet = $request->id_outlet;
        $pengiriman->id_barang = $request->id_barang;
        $pengiriman->biaya_pengiriman = $request->biaya_pengiriman;
        $pengiriman->tanggal = $request->tanggal;
        $pengiriman->save();

        return redirect('/pengiriman');
}

    public function destroy($id)
    {
        $pengiriman = Pengiriman::findOrFail($id);
        $pengiriman->delete();
        return redirect('/pengiriman');
}
}
