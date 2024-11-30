<?php

namespace App\Http\Controllers;

use App\Models\Datakriteria;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function register() {
        return view('register');
    }
     
    public function postlogin(Request $request): RedirectResponse
    {
        
        $credentials = $request->only('username', 'password');
        // dd($credentials);
        // dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)) {
            return redirect()->intended('/login');   
        }

        return redirect("/");
    }

    public function postregistrationn(Request $request)
    {
        // $data =[
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        // ];

        // $user = User::create($data);
        // if ($user){

        // }
        // dd("SAlaha wey");
        $user = new user();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/');

    }

    public function dashboard()
    {
        if(auth::check()){
            return view('dashboard');
        }
        return redirect("login")->withSuccess('Oops! you do not have access');
    }
    public function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])

        ]);
    }
    public function logout(): RedirectResponse
    {
        session()->flush();
        Auth::logout();

        return redirect('/');
    }
}



