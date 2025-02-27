<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public function designer()
    {
        return view('designerRegistration');
    }

    public function designerRegistration(Request $request){
     $request->validate([
         'name' => 'required|string|min:3',
         'password' => 'required',
         'email' => 'required',
         'payment'=>'required',
     ]);

     // Store data
     Designer::create($request->all());

     // Redirect to app page
     return redirect('/designerRegistration')->with('success', 'Data saved successfully!');
    }
}
