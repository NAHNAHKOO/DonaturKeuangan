<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\UangKeluar;
 
class UangkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = UangKeluar::all();
        return view('UangKeluar.index', compact('data'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('UangKeluar.tambah');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->uangkeluar->mutasi = $request->mutasi;
        $this->uangkeluar->tanggal = $request->tanggal;
        $this->uangkeluar->uraian = $request->uraian;
        $this->uangkeluar->keterangan = $request->keterangan;

        $this->uangkeluar->save();

        return redirect()->route('uangkeluar.')->with('status', 'Data uang keluar berhasil ditambahkan!');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Buku::findOrFail($id);
        
        $update->mutasi = $request->mutasi;
        $update->tanggal = $request->tanggal;
        $update->uraian = $request->uraian;
        $update->keterangan = $request->keterangan;

        $update->save();
        return redirect()->route('uangkeluar');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}