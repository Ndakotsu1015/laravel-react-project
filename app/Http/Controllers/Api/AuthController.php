<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    public function signup(SignupRequest $request)
    {

        $data = $request->validated();
        /** @var \App\Models\User $user */
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $token = $user->createToken('main')->plainTextToken;

        return response(
            compact('user', 'token')
        );
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (!Auth::attempt($credentials)) {
            return response([
                'message' => 'Email or password incorrect'
            ]);
        }
        /** @var User $user */
        $user = Auth::user();
        $token = $user->createToken('main')->plainTextToken;
        log::alert($token);
        return response(
            compact('user', 'token')
        );
    }


    //     public function login(LoginRequest $request)
// {
//     $credentials = $request->validated();

    //     if (!Auth::attempt($credentials)) {
//         return response([
//             'message' => 'Email or password incorrect'
//         ], 422);
//     }

    //     /** @var \App\Models\User $user */
//     $user = Auth::user();

    //     // Create a new API token for the user
//     $token = $user->createToken('main')->plainTextToken;

    //     return response([
//         'user' => $user,
//         'token' => $token,
//     ]);
// }
    public function logout(Request $request)
    {
        /** @var User $user */
        $user = $request->user();
        $user->currentAccessToken()->delete;
        return response('', 204);
    }
}
