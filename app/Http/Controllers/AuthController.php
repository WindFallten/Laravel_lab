<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
 public function main(){
    return view('auth.signin');
 }
 public function user(Request $request)
 {
    $request -> validate([
        'name'=>'required','email'=>'required|email','password'=>'required|min:6'
    ]);
    return response() -> json($request);
 }
}
