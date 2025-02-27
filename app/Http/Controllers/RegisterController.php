<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function index()
   {
       return view('userRegistration');
   }



   public function register(Request $request){
    $request->validate([
        'name' => 'required|string|min:3',
        'phone' => 'required',
        'email' => 'required',
    ]);

    // Store data
    Register::create($request->all());

    // Redirect to app page
    return redirect('/userRegistration')->with('success', 'Data saved successfully!');
   }

  
}
