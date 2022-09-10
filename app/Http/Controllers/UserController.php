<?php
/**
 * @author RANAIVOARISON MIONJA
 * 
 */

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
     // Show Login Form
     public function login() 
     {
         return view('users.login');
     }
 
     // Authenticate User
     public function authenticate(Request $request) 
     {
         $formFields = $request->validate([
             'email' => ['required', 'email'],
             'password' => 'required'
         ]);
 
         if(auth()->attempt($formFields)) {
             $request->session()->regenerate();
             return redirect()->route('perso_details.index')->with('success', 'You are now logged in!');
         }
 
         return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
     }

    // Show Register Form
    public function create() 
    {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request) 
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password_confirmed' => 'required|same:password',
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($request->password);
        
        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect()->route('login')->with('success', 'User created and log in');
    }

    // Logout User
    public function logout(Request $request) 
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('warning', 'You have been logged out!');

    }
}