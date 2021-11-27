<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\KirimEmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('loginuser.loginn');
    }
    public function register()
    {
        return view('loginuser.registerr');
    }
    public function register_store(Request $request)
    {
        
        // return $request;
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|alpha_num',
            'retypepassword' => 'required|same:password|min:8|max:10',
            'birthday' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'gender' => 'required'
        ], [
            'fullname.required' => 'Fullname must be required',
            'email.required' => 'Email harus diisi ya',
            'email.unique' => 'Email nya udah ada ni',
            'password.required' => 'password must be required',
            'password.min' => 'min 8 character',
            'password.max' => 'max 10 character',
            'password.alpha_num' => 'Password must be there is a number',
            'retypepassword.required' => 'retype password must be required',
            'retypepassword.same' => 'password must be same with first password',
            'birthday.required' => 'Date of birthday must be required',
            'address.required' => 'Address must be required',
            'phonenumber.required' => 'Phone number must be required',


        ]);
        User::create([
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birthday' => $request->birthday,
            'address' => $request->address,
            'phone_number' => $request->phonenumber,
            'gender' => $request->gender,
            'level' => 'user'
        ]);
        return redirect('/loginuser');
    }

    public function login_store(Request $request)
    {
        // return $request;
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:8|max:10',
        ], [
            'email.required' => 'email must be required',
            'password.required' => 'password must be required',
            'password.min' => 'min 8 character',
            'password.max' => 'max 10 character',
            'password.alpha_num' => 'Password must be there is a number',
        ]);
        // syntax login
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if (Auth::check()) {

            $isi =[
                'barang'=>'bunga',
                'des'=>'bunga layu bermekaran'
            ];
            Mail::to('fazaridho4@gmail.com')->send(new KirimEmail($isi));
            
            return redirect('/home');
            

        } else {
            return redirect('/loginuser');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/home');
    }
}