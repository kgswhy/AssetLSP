<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth; // Add this line to import the JWTAuth class
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Illuminate\Validation\Factory;

class AuthController extends Controller
{
    public function login()
    {
        try {
            if (!$token = JWTAuth::attempt(['email' => request()->email, 'password' => request()->password])) {
                return response()->json([
                    'error' => 'username & password salah'
                ], 400);
            }
        } catch (JWTException $error) {
            return response()->json([
                'error' => 'kesalahan, tidak bisa membuat token'
            ], 400);
        }
        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token,
            'user' => JWTAuth::user()
        ]);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getCode());
        } catch (TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getCode());
        } catch (JWTException $e) {

            return response()->json(['token_absent'], $e->getCode());
        }
        return response()->json(compact('user'));
    }

    public function refresh()
    {
        return $this->respondWithToken(JWTAuth::refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token->accessToken,
            'token_type' => 'bearer',
            'expires_in' => $token->token->expires_at->diffInMinutes(now())
        ]);
    }

    public function logout()
    {
        if (auth()) {
            auth()->logout();
            return response()->json(
                [
                    'success' => 'Logout Berhasil',
                    'code' => 200,
                ],
                201
            );
        }
    }
}
