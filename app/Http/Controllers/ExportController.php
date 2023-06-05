<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Bahanbaku;
use App\Models\Gudangbarang;
use App\Models\Gudangbahan;
use App\Models\Peralatan;
use App\Models\Produksi;
use App\Models\Pegawai;
use App\Models\Pengiriman;
use App\Models\Outlet;
use PDF;

class ExportController extends Controller
{
    public function barangPDF()
    {
        $barang = Barang::all();

        $pdf = PDF::loadView('pdf.barang', compact('barang'));
        return $pdf->download('report-barang.pdf');
    }
    public function bahanPDF()
    {
        $bahan = Bahanbaku::all();

        $pdf = PDF::loadView('pdf.bahan', compact('bahan'));
        return $pdf->download('report-bahan.pdf');
    }
    public function GudangbarangPDF()
    {
        $gudangbarang = Gudangbarang::all();

        $pdf = PDF::loadView('pdf.gudangbarang', compact('gudangbarang'));
        return $pdf->download('report-gudangbarang.pdf');
    }
    public function GudangbahanPDF()
    {
        $gudangbahan = Gudangbahan::all();

        $pdf = PDF::loadView('pdf.gudangbahan', compact('gudangbahan'));
        return $pdf->download('report-gudangbahan.pdf');
    }
    public function PeralatanPDF()
    {
        $peralatan = Peralatan::all();

        $pdf = PDF::loadView('pdf.peralatan', compact('peralatan'));
        return $pdf->download('report-peralatan.pdf');
    }
    public function ProduksiPDF()
    {
        $produksi = Produksi::all();

        $pdf = PDF::loadView('pdf.produksi', compact('produksi'));
        return $pdf->download('report-produksi.pdf');
    }
    public function PegawaiPDF()
    {
        $pegawai = Pegawai::all();

        $pdf = PDF::loadView('pdf.pegawai', compact('pegawai'));
        return $pdf->download('report-pegawai.pdf');
    }
    public function PengirimanPDF()
    {
        $pengiriman = Pengiriman::all();

        $pdf = PDF::loadView('pdf.pengiriman', compact('pengiriman'));
        return $pdf->download('report-pengiriman.pdf');
    }
    public function OutletPDF()
    {
        $outlet = Outlet::all();

        $pdf = PDF::loadView('pdf.outlet', compact('outlet'));
        return $pdf->download('report-outlet.pdf');
    }
}