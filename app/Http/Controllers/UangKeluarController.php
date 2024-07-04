<?php
 
namespace App\Http\Controllers;
 
use Carbon\Carbon;
use App\Models\UangKeluar;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\UangKeluarExport;
use Maatwebsite\Excel\Facades\Excel;

 
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

     public function __construct(){
        $this->uangkeluar = new UangKeluar;
    }
    public function store(Request $request)
    {
         $rules = [
            'tanggal' => 'required',
            'jenismutasi' => 'required',
            'nominsal' => 'required',
            'uraian' => 'required',
            'keterangan' => 'required',
        ];
        $messages = [
            'required' => 'data yang di input tidak sesuai'
        ];
        
        $this->validate($request, $rules, $messages);

        $this->uangkeluar->jenis_mutasi = $request->jenismutasi;
        $this->uangkeluar->tanggal = $request->tanggal;
        $this->uangkeluar->nominal = $request->nominal;
        $this->uangkeluar->uraian = $request->uraian;
        $this->uangkeluar->keterangan = $request->keterangan;

        $this->uangkeluar->save();

        return redirect()->route('uangkeluar.index')->with('status', 'Data uang keluar berhasil ditambahkan!');
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
        $update = UangKeluar::findOrFail($id);
        
        $update->jenis_mutasi = $request->jenismutasi;
        $update->tanggal = $request->tanggal;
        $update->nominal = $request->nominal;
        $update->uraian = $request->uraian;
        $update->keterangan = $request->keterangan;

        $update->save();
        return redirect()->route('UangKeluar');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
      $hapus = UangKeluar::findOrFail($id);
      $hapus->delete();
      return redirect()->route('hapusUangKeluar');
        
    }

     public function export() 
    {
        return Excel::download(new UangKeluarExport, 'UangKeluar-'.Carbon::now()->timestamp.'.xlsx');
    }

    public function exportpdf()
    {
        $data = UangKeluar::all();    
        $pdf = Pdf::loadView('pdf.export-UangKeluar', ['data' => $data]);
        return $pdf->download('pdf-UangKeluar-'.Carbon::now()->timestamp.'.pdf');
    }
}
