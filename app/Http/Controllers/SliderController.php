<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;

class SliderController extends Controller
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
        $Slider = Slider::all();

        return response()->json([
            'data' => $Slider
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
            'nama_slider' => 'required', 
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

        $Slider = Slider::create($input);
        return response()->json([
            'data'=> $Slider
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $Slider)
    {
        return response()->json([
            'data' => $Slider
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $Slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $Slider)
    {
        $validator = FacadesValidator::make($request->all(),[
            'nama_slider' => 'required', 
            'deskripsi' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        };

        $input = $request->all();
        

        if($request->has('gambar')){
            File::delete('uploads/' . $Slider->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1,9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] = $nama_gambar;
        }else{
            unset($input['gambar']);
        }

        $Slider->update($input);
        return response()->json([
            'message' => 'success',
            'data' => $Slider
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $Slider)
    {
        File::delete('uploads/' . $Slider->gambar);
        
        $Slider->delete();

        return response()->json([
            'message' => 'success'
        ]);
    }
}
