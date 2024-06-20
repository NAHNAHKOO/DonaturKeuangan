<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\UangMasuk;
 
class UangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = UangMasuk::all();
        return view('UangMasuk.index', compact('data'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('UangMasuk.tambah');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->uangmasuk->mutasi = $request->mutasi;
        $this->uangmasuk->tanggal = $request->tanggal;
        $this->uangmasuk->uraian = $request->uraian;
        $this->uangmasuk->keterangan = $request->keterangan;

        $this->uangmasuk->save();

        return redirect()->route('uangmasuk.')->with('status', 'Data uang masuk berhasil ditambahkan!');
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
        return redirect()->route('uangmasuk');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}