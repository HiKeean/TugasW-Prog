<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    function index()
    {
        return view('auth.login');
    }
    function reg()
    {
        return view('index1');
    }

    function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //variabel yang digunakan untuk menerima inputan dari user
        $credentials = request(['email', 'password']);

       #dd($credentials);

        //ini kalau misalnya di DB ga ada email dan passwordnya!
        if(auth()->attempt($credentials)){
            $token = Auth::guard('api')->attempt($credentials);
            cookie()->queue(cookie('token', $token, 60));
            return redirect('/log');
        }

        return response()->json([
            'error' => 'email atau password salah'
        ]);
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_member'=>'required',
            'provinsi'=>'required',
            'kabupaten'=>'required',
            'kecamatan'=>'required',
            'detail_alamat'=>'required',
            'no_hp'=>'required',
            'email'=>'required|email',
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
        unset($input['konfirmasi_password']);

        $members = Member::create($input);
        return redirect('/log');
    }
    
    function login_member(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $member = Member::where('email', $request->email)->first();
        if($member)
        {
            if(Hash::check($request->password, $member->password))
            {
                return response()->json([
                    'message' =>'success',
                    'data'=> $member
                ]);
            }else
            {
                return response()->json([
                    'message' =>'failed',
                    'data'=> 'Password wrong'
                ]);
            }
            
        }else
        {
            return response()->json([
                'message' =>'failed',
                'data'=> 'Email is wrong'
            ]);
        }

    }
    public function logout()
    {
        Session::flush(); 
        return redirect('/login');
    }
    public function logout_member()
    {
        Session::flush();
        return redirect('/login_member');
    }
}
