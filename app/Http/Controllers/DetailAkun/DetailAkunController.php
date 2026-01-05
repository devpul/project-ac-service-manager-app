<?php

namespace App\Http\Controllers\DetailAkun;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class DetailAkunController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('DetailAkun.index', compact('user'));
    }

    public function update(Request $request)
    {   
        try {
            $user = Auth::user();
            
            $validated = $request->validate([
                'fullname'  =>  'sometimes|string',
                'username'  =>  'sometimes|string',
                'email'     =>  'sometimes|email',
                'password'  =>  'sometimes|string|min:5',
                'phone'     =>  'sometimes|string|regex:/^[0-9]+$/',
            ]);

            $user->update([
                'fullname'  =>  $validated['fullname'],
                'username'  =>  $validated['username'],
                'email'     =>  $validated['email'],
                'password'  =>  Hash::make($validated['password']),
                'phone'     =>  $validated['phone'],
            ]);

            return redirect()->route('dashboard.index')->with('success', 'Berhasil memperbarui akun.');

        } catch (ValidationException $e) {
            $error = $e->errors();
            return back()->withErrors($error);
        }
    }
}
