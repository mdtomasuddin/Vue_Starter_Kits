<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
 use Illuminate\Support\Facades\Cache;

class DemoController extends Controller
{
    public function index()
    {
        
        return Inertia::render('Demo');
    }

    public function person(Request $request)
    {
        $name=Cache::get('name');      
        $email=Cache::get('email');
        $context=[
            'name'=>$name,
            'email'=>$email,
            'age'=>30,
        ];
        return Inertia::render('Person',$context);
        // $context=[
        //     'name'=>'John Doe',
        //     'email'=>'tomas@gmail.com',
        //     'age'=>30,
        // ];
        // return Inertia::render('Person',$context);
    }

    public function saveForm(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
        ]);
        Cache::put('name',$request->name);
        Cache::put('email',$request->email);
        // return response()->json(['message'=>'Form saved']);
        return redirect()->route('person');
    }
}
