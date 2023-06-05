<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::paginate(50);

        return view('pegawai.index', [
            'pegawai' => $pegawai,
        ]);
    }
    public function addView()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_pegawai' => $request->input('nama_pegawai'),
            'jabatan' => $request->input('jabatan'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Pegawai::create($data);

        return redirect()->route('pegawai.index');
}
public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai', ));
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->save();

        return redirect('/pegawai');
}

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect('/pegawai');
}
}
