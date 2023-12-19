<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;

class MemberController extends Controller
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
        $members = Member::all();

        return response()->json([
            'data' => $members
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
            'nama_member'=>'required',
            'provinsi'=>'required',
            'kabupaten'=>'required',
            'kecamatan'=>'required',
            'detail_alamat'=>'required',
            'no_hp'=>'required',
            'email'=>'required',
            'password'=>'required|same:konfirmasi_password',
            'konfirmasi_password'=>'required|same:password',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        };

        $input = $request->all();
        $input['password'] = bcrypt($request->password);


        $members = Member::create($input);
        return response()->json([
            'data'=> $members
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $members)
    {
        return response()->json([
            'data' => $members
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $members)
    {
        $validator = FacadesValidator::make($request->all(),[
            'nama_member'=>'required',
            'provinsi'=>'required',
            'kabupaten'=>'required',
            'kecamatan'=>'required',
            'detail_alamat'=>'required',
            'no_hp'=>'required',
            'email'=>'required',
            'password'=>'required|same:konfirmasi_password',
            'konfirmasi_password'=>'required|same:password',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        };

        $input = $request->all();
        $input['password'] = bcrypt($request->password);


        $members = Member::create($input);
        return response()->json([
            'data'=> $members
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $members)
    {
        File::delete('uploads/' . $members->gambar);
        
        $members->delete();

        return response()->json([
            'message' => 'success'
        ]);
    }
}
