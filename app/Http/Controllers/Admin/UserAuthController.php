<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class UserAuthController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        if (!auth()->attempt($credentials)) {
            return redirect()->route('admin.login')->withErrors(['error' => 'No found user']);
        }
        return redirect()->route('admin.dashboard');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login-page');
    }
}
