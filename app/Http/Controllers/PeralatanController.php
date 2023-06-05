<?php

namespace App\Http\Controllers;
use App\Models\Peralatan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeralatanController extends Controller
{
    public function index()
    {
        $peralatan = Peralatan::paginate(20);

        return view('peralatan.index', [
            'peralatan' => $peralatan,
        ]);
}
public function addView()
    {
        return view('peralatan.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_alat' => $request->input('nama_alat'),
            'jumlah' => $request->input('jumlah'),
            'kondisi' => $request->input('kondisi'),            
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Peralatan::create($data);

        return redirect()->route('peralatan.index');
}
public function edit($id)
    {
        $peralatan = Peralatan::findOrFail($id);
        return view('peralatan.edit', compact('peralatan', ));
    }

    public function update(Request $request, $id)
    {
        $peralatan = peralatan::findOrFail($id);
        $peralatan->nama_alat = $request->nama_alat;
        $peralatan->jumlah = $request->jumlah;
        $peralatan->kondisi = $request->kondisi;
        $peralatan->save();

        return redirect('/peralatan');
}

    public function destroy($id)
    {
        $peralatan = Peralatan::findOrFail($id);
        $peralatan->delete();
        return redirect('/peralatan');
}


}
