<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request)
    {

        try {
            $data = $request->validated();
            $data['password'] = bcrypt($data['password']);
            $user = User::create($request->validated());

            return UserResource::make($user);

        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while creating the user.'], 500);
        }
    }
}
