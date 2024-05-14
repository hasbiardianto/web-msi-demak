<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Pengurus::all();
        return view('slider.pengurus', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.buat');
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
            'poto' => 'required|image',
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi' => 'nullable|string',
        ]);
        

        $input = $request->all();

        if ($request->hasFile('poto')) {
            $poto = $request->file('poto');
            $destinationPath = 'image/';
            $potoName = md5(uniqid()) . "." . $poto->getClientOriginalExtension();
            $poto->move($destinationPath, $potoName);
            $input['poto'] = $potoName;
        }

        Pengurus::create($input);

        return redirect('/pengurus')->with('message','Data berhasil dimasukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function show(Pengurus $pengurus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengurus = Pengurus::find($id);
        return view('slider.editPengurus', compact('pengurus'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'poto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi' => 'nullable|string',
        ]);
    
        $input = $request->all();
    
        $input['deskripsi'] = nl2br($request->input('deskripsi'));
    
        $pengurus = Pengurus::find($id);
    
        if (!$pengurus) {
            return redirect('/pengurus')->with('error', 'Data pengurus tidak ditemukan');
        }
    
        if ($poto = $request->file('poto')) {
            $destinationPath = 'image/';
    
            // Hapus foto lama jika ada
            if ($pengurus->poto) {
                $imagePath = public_path($destinationPath . $pengurus->poto);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
    
            $potoName = md5(uniqid()) . "." . $poto->getClientOriginalExtension();
            $poto->move($destinationPath, $potoName);
            $input['poto'] = $potoName;
        } else {
            unset($input['poto']);
        }
    
        if ($pengurus->update($input)) {
            return redirect('/pengurus')->with('message', 'Data berhasil di edit');
        } else {
            return redirect('/pengurus')->with('error', 'Gagal memperbarui data pengurus');
        }
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengurus = Pengurus::find($id);
    
        if (!$pengurus) {
            return redirect('/pengurus')->with('error', 'Data pengurus tidak ditemukan');
        }
    
        // Hapus foto jika ada
        if ($pengurus->poto) {
            $destinationPath = 'image/';
            $imagePath = public_path($destinationPath . $pengurus->poto);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        $pengurus->delete();
    
        return redirect('/pengurus')->with('message', 'Data berhasil dihapus');
    }
}
