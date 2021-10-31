<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Services\DataTable;
class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $surat = Surat::all();

        // menampilkan data
        return view('index')->with('surats', $surat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'kategori' => 'required',
            'judul' => 'required',
            'file_path' => 'required|file|mimes:csv,txt,xlx,xls,pdf|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($file = $request->file('file_path ')) {
            $nama_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $ukuran_file = $file->getSize();
            $destinationPath = 'pdf/ ';
            $profileFile = date('YmdHis') . "." . $file ->getClientOriginalExtension();
            $file->move($destinationPath, $profileFile);
            $input['file_path '] = "$profileFile ";
        }
    
        Surat::create($input);
     
        return redirect()->route('surats.index')
                        ->with('success','Surat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        return view('show',compact('surat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        $surat->delete();
     
        return redirect()->route('surats.index')
                        ->with('success','Surat deleted successfully');
    }
}
