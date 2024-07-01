<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataUser;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data2 = DataUser::all();
        return view('DataUser.index', compact('data2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataUser.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function __construct(){
        $this->datauser = new DataUser;
    }
    public function store(Request $request)
    {
        $this->datauser->nama = $request->nama;
        $this->datauser->email = $request->email;
        $this->datauser->no_hp = $request->nohp;
        $this->datauser->role = $request->role;

        $this->datauser->save();

        return redirect()->route('datauser.index')->with('status', 'Data uang keluar berhasil ditambahkan!');
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
        $update = Datauser::findOrFail($id);
        
        $update->nama = $request->nama;
        $update->email = $request->email;
        $update->no_hp = $request->nohp;
        $update->role = $request->role;
       
        $update->save();
        return redirect()->route('DataUser');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = DataUser::findOrFail($id);
        $hapus->delete();
        return redirect()->route('hapusDataUser');
    }
}
