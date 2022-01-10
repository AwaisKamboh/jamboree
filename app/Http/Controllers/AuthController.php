<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    { {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            if (Auth::attempt($request->only('email', 'password'))) {
                return redirect()->intended('/')
                    ->withSuccess('Signed in');
            }
            return redirect("login")->withErrors('Login details are not valid');
        }
    }
    
        public function register(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'user_name' => 'required|string|unique:users',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'cpassword' => 'required|string|min:8',
                'gender' => 'required',
                'address' => 'required',
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "The given data was invalid.",
                    "errors" => $validator->errors()->all()
                ], 422);
            }
            if($request->password !== $request->cpassword){
                return response()->json([
                    "status" => false,
                    "message" => "Password fields not matched.",
                ], 422);
            }
            $user = new User();
            $user->name = $request->name;
            $user->user_name = $request->user_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->gender = $request->gender;
            $user->address = $request->address;
            $user->save();

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('/')
                    ->withSuccess('Signed in');
            }
    
}

public function logout()
{
    Session::flush();
    Auth::logout();

    return Redirect('/');
}
}
