<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\order_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;

class OrderController extends Controller
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
        $orders = Order::all();

        return response()->json([
            'data' => $orders
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
        $validator = FacadesValidator::make($request->all(), [
            'id_member'=>'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        };

        $input = $request->all();

       

        $Order = Order::create($input);

        for($i=0; $i < count($input['id_produk']); $i++){
            order_details::create([
                'id_order' => $Order["id"],
                'id_produk' => $input['id_produk'][$i],
                'id_produk' => $input['jumlah'][$i],
                'id_produk' => $input['size'][$i],
                'id_produk' => $input['color'][$i],
                'id_produk' => $input['total'][$i],
            ]);
        }

        return response()->json([
            'data'=> $Order
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $Order)
    {
        return response()->json([
            'data' => $Order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $Order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $Order)
    {
        $validator = FacadesValidator::make($request->all(),[
            'id_member' => 'required', 
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        };

        $input = $request->all();

        $Order->update($input);

        order_details::where('id_order', $Order['id'])->delete();

        for($i=0; $i < count($input['id_produk']); $i++){
            order_details::create([
                'id_order' => $Order["id"],
                'id_produk' => $input['id_produk'][$i],
                'id_produk' => $input['jumlah'][$i],
                'id_produk' => $input['size'][$i],
                'id_produk' => $input['color'][$i],
                'id_produk' => $input['total'][$i],
            ]);
        }

        return response()->json([
            'message' => 'success',
            'data' => $Order
        ]);
    }

    public function ubah_status(Request $request, Order $order)
    {
        $order->update([
            'status' => $request->status
        ]);
        return response()->json([
            'message' => 'success',
            'data' => $order
        ]);
    }

    public function dikonfirmasi()
    {
        $orders = Order::where('status', 'Dikonfirmasi')->get();

        return response()->json([
            'data' => $orders
        ]);
    }
    public function dikemas()
    {
        $orders = Order::where('status', 'Dikemas')->get();

        return response()->json([
            'data' => $orders
        ]);
    }
    public function dikirim()
    {
        $orders = Order::where('status', 'Dikirim')->get();

        return response()->json([
            'data' => $orders
        ]);
    }
    public function diterima()
    {
        $orders = Order::where('status', 'Diterima')->get();

        return response()->json([
            'data' => $orders
        ]);
    }
    public function selesai()
    {
        $orders = Order::where('status', 'Selesai')->get();

        return response()->json([
            'data' => $orders
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $Order)
    {
        
        $Order->delete();

        return response()->json([
            'message' => 'success'
        ]);
    }
}
