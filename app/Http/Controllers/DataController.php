<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Data::paginate(10);
        return view('slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
            'title' => 'required', 'description' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'image/';
            $imageName = md5(uniqid()) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Data::create($input);

        return redirect('/data')->with('message','Data berhasil dimasukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data = Data::find($id);
       return view('home.show', compact('data'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('slider.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);
    
        $input = $request->all();
    
        // Memastikan bahwa deskripsi memiliki spasi yang dipertahankan
        $input['description'] = nl2br($request->input('description'));
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
    
            // Hapus foto sebelumnya jika ada
            if ($data->image) {
                $imagePath = public_path($destinationPath . $data->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
    
            $imageName =  md5(uniqid()) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }
    
        $data->update($input);
    
        return redirect('/data')->with('message', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        $imagePath = public_path('image/' . $data->image);
    
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    
        $data->delete();
    
        return redirect('/data')->with('message', 'data berhasil dihapus');
    }

}