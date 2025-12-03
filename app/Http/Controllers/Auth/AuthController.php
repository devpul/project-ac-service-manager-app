<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    private function validateUser(Request $request, $action = null)
    {
        try {

            $rulesRegister = [
                'role_id'    => 'required|exists:roles,id',
                'username'   => 'required|string|unique:users,username',
                'password'   => 'required|min:3|confirmed',
                'email'      => 'required|email|unique:users,email',
                'phone'      => [
                    'required',
                    'regex:/^[0-9]+$/',
                    'string'
                ],
            ];

            return $request->validate($rulesRegister);

        } catch (ValidationException $e) {
            // return 
        }
    }

    public function register(Request $request)
    {
        $validated = $this->validateUser($request, 'register');
        if (! is_array($validated)) return $validated;
    }
}
