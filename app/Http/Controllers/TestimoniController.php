<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index']);
    }

    public function index()
    {
        $testimonis = Testimoni::all();

        return response()->json([
            'data' => $testimonis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = FacadesValidator::make($request->all(),[
            'nama_testimoni' => 'required', 
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,webp'
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        };

        $input = $request->all();

        if($request->has('gambar')){
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1,9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] = $nama_gambar;
        }

        $testimoni = Testimoni::create($input);
        return response()->json([
            'data'=> $testimoni
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        return response()->json([
            'data' => $testimoni
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $validator = FacadesValidator::make($request->all(),[
            'nama_testimoni' => 'required', 
            'deskripsi' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        };

        $input = $request->all();
        

        if($request->has('gambar')){
            File::delete('uploads/' . $testimoni->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1,9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] = $nama_gambar;
        }else{
            unset($input['gambar']);
        }

        $testimoni->update($input);
        return response()->json([
            'message' => 'success',
            'data' => $testimoni
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        File::delete('uploads/' . $testimoni->gambar);
        
        $testimoni->delete();

        return response()->json([
            'message' => 'success'
        ]);
    }
}
