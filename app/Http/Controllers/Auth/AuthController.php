<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    private function validateUser(Request $request, $action = null)
    {
        try {

            $rulesRegister = [
                'role_id'    => 'required|exists:roles,id',
                'username'   => 'required|string|unique:users,username',
                'fullname'   => 'required|string',
                'password'   => 'required|min:3|confirmed',
                'email'      => 'required|email|unique:users,email',
                'phone'      => [
                    'required',
                    'regex:/^[0-9]+$/',
                    'string',
                    'unique:users,phone'
                ],
            ];

            $rulesLogin = [
                'email'      => 'required|email',
                'password'   => 'required|min:3',
            ];

            if ($action === 'register') return $request->validate($rulesRegister);

            if ($action === 'login')  return $request->validate($rulesLogin);

        } catch (ValidationException $e) {
            // return back()->with('error', 'Email atau password anda salah, silahkan coba lagi.');
            return response()->json($e->getMessage());
        }
    }

    public function register(Request $request)
    {
        $validated = $this->validateUser($request, 'register');
        if (! is_array($validated)) return $validated;

        
    }

    public function storeLogin(Request $request)
    {
        $validated = $this->validateUser($request, 'login');
        if (! is_array($validated)) return $validated;

        if (! Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            return back()->with('error', 'Email atau password anda salah, silahkan coba lagi.');
        }
        
        $request->session()->regenerate();

        return redirect()->route('dashboard.index')->with('success', 'Anda Berhasil Login.');
    }

    public function storeLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda berhasil logout.');
    }

    public function indexRegister()
    {
        return view('Auth.register');
    }

    public function indexLogin()
    {
        return view('Auth.login');
    }
}
