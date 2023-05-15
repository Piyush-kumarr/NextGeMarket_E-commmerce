<?php

namespace App\Http\Controllers;
use App\Models\Register_user;
use App\Models\Product;

use Illuminate\Http\Request;

class userController extends Controller
{
    function existingUser(Request $req){
        // $data = $req->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|string|min:8',
        // ]);
        // $user = Register_user::where('email',$data['email'])->first();
        // if(!$user || !Hash::check($data['password'], $user->password)){
        //     return redirect()->back()->withErrors(['email' => 'Invalid email or password.']); // Return an error message
        // }else{
        //     $req->session()->put('user',$user);
        //     return redirect('/index'); // Redirect to home page or any other page you want
        // }
    }
    function userRegister(Request $req){
        $data = $req->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
        $req->session()->put('user',$data);
        $emailExist = Register_user::where('email',$data['email'])->first();
         if($emailExist){
            return redirect()->back()->withErrors(['email' => 'Email already exists. Please try to login.']); // Return an error message
        }else{
            $user = new Register_user;
            $user->name= $data['name'];
            $user->email=$data['email'];
            $user->password = bcrypt($data["password"]);
            $user->save();
            if (auth()->check()) {
                $name = auth()->user()->name;
                return view('index', ['name' => $name]);
            } else {
                return view('index');
            }
            }
        }

            function product(){
                $products = Product::all();
                return view('test', compact('products'));
            }
            function show($id)
            {
                $product = Product::find($id);
                return view('showProduct', ['product' => $product]);
            }   
    }