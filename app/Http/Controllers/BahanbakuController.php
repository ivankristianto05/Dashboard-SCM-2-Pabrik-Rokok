<?php

namespace App\Http\Controllers;

use App\Models\Bahanbaku;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BahanbakuController extends Controller
{
    public function index()
    {
        $bahanbaku = Bahanbaku::paginate(20);

        return view('bahanbaku.index', [
            'bahanbaku' => $bahanbaku,
    ]);
}
public function addView()
    {
        return view('bahanbaku.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_bahan' => $request->input('nama_bahan'),
            'baik_digunakan' => $request->input('baik_digunakan'),
            'takaran' => $request->input('takaran'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Bahanbaku::create($data);

        return redirect()->route('bahanbaku.index');
}
public function edit($id)
    {
        $bahanbaku = Bahanbaku::findOrFail($id);
        return view('bahanbaku.edit', compact('bahanbaku', ));
    }

    public function update(Request $request, $id)
    {
        $bahanbaku = Bahanbaku::findOrFail($id);
        $bahanbaku->nama_bahan = $request->nama_bahan;
        $bahanbaku->baik_digunakan = $request->baik_digunakan;
        $bahanbaku->takaran = $request->takaran;
        $bahanbaku->save();

        return redirect('/bahanbaku');
}

    public function destroy($id)
    {
        $bahanbaku = Bahanbaku::findOrFail($id);
        $bahanbaku->delete();
        return redirect('/bahanbaku');
}
}
