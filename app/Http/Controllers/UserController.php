<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Exceptions\JWTException;

class userController extends Controller
{
    public function insert(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'id_outlet' => 'required|numeric',
			'nama' => 'required|string|max:255',
			'username' => 'required|string|max:50|unique:Users',
			'password' => 'required|string|min:6',
		]);

		if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ]);
		}

		$user = new User();
		$user->id_outlet 	= $request->id_outlet;
		$user->nama 	= $request->nama;
		$user->username = $request->username;
		$user->role 	= 'admin';
		$user->password = Hash::make($request->password);
		$user->save();


        $data = User::where('username','=', $request->username)->first();
        return response()->json([
            'succes' => true,
            'message' => 'berhasil menambahkan user baru',
            'data' => $data
           ]);
        //return $this->response->successResponseData('Data user berhasil ditambahkan', $data);
	}

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        try{
            if(!$token = JWTAuth::attempt($credentials)){
                return response()->json([
                    'success' => false,
                    'message' => 'invalid username and password',
                ]);
            }
        } catch(JWTException $e){
            return response()->json([
                'success' => false,
                'message' => 'generated token failed',
            ]);
        }

        $data = [
            'token' => $token,
            'user' => JWTAuth::user()
        ];

        return response()->json([
            'success' => true,
            'message' => 'authentication success',
            'data' => $data
        ]);
    }

    public function loginCheck(){
        try {
            if(!$user = JWTAuth::parseToken()->authenticate()){
                return $this->response->errorResponse('Invalid Token!');
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e){
            return response()->json([
                'success' => false,
                'message' => 'Token Expired',
            ]);
        } catch  (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
            return response()->json([
                'success' => false,
                'message' => 'Token Invalid',
            ]);
        } catch  (\Tymon\JWTAuth\Exceptions\JWTException $e){
            return response()->json([
                'success' => false,
                'message' => 'Authorization token not found',
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Authentication Success',
            'data' => $user,
        ]);
    }

    public function logout(Request $request)
    {
        if(JWTAuth::invalidate(JWTAuth::getToken())) {
            return response()->json([
                'success' => true,
                'message' => 'You are logged out.',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Logged out failed.',
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_outlet' => 'required|numeric',
            'nama'      => 'required|string|max:255',
            'role'      => 'required|string',
        ]);

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ]);
        }

        $user = User::where('id', $id)->first();
        $user->id_outlet = $request->id_outlet;
        $user->nama      = $request->nama;
        $user->username  = $request->username;
        $user->role      = $request->role;
        if($request->password != NULL){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Data user berhasil diubah!',
        ]);
    }

    public function delete($id)
    {
        $delete = User::where('id',$id)->delete();

        if($delete){
            return response()->json([
                'success' => true,
                'message' => 'Data user berhasil dihapus'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data user gagal dihapus'
            ]);
        }
    }

    public function getAll()
    {
        $data["count"] = User::count();
        $data['users']  = User::with('outlet')->get();

        return response()->json([
            'success' => true,
            'data'    => $data
        ]);
    }

    public function getById($id)
    {
        $data["users"] = User::where('id', $id)->get();

        return response()->json([
            'success' => true,
            'data'    => $data
        ]);
    }
  
}