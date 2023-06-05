<?php

namespace App\Http\Controllers;
use App\Models\Gudangbahan;
use App\Models\Bahanbaku;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GudangbahanController extends Controller
{
    public function index()
    {
        $gudangbahan = Gudangbahan::with('RBahan')->paginate(5);

        return view('gudangbahan.index', [
            'gudangbahan' => $gudangbahan,
        ]);
    }
    public function addView()
    {
        $bahan_ = Bahanbaku::all();
        return view('gudangbahan.create', compact('bahan_'));
    }

    public function store(Request $request)
    {
        $data = [
            'id_bahan' => $request->input('id_bahan'),
            'jumlah_bahan' => $request->input('jumlah_bahan'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ];

        Gudangbahan::create($data);

        return redirect()->route('gudangbahan.index');
}
public function edit($id)
    {
        $bahan_ = Bahanbaku::all();
        $gudangbahan = Gudangbahan::findOrFail($id);
        return view('gudangbahan.edit', compact('gudangbahan','bahan_', ));
    }

    public function update(Request $request, $id)
    {
        $gudangbahan = Gudangbahan::findOrFail($id);
        $gudangbahan->id_bahan = $request->id_bahan;
        $gudangbahan->jumlah_bahan = $request->jumlah_bahan;
        $gudangbahan->save();

        return redirect('/gudangbahan');
}

    public function destroy($id)
    {
        $gudangbahan = Gudangbahan::findOrFail($id);
        $gudangbahan->delete();
        return redirect('/gudangbahan');
}
}
