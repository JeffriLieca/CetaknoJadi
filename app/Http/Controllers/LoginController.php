<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function signinCustomer(Request $request)
    {
        // $request ->validate([
        //     'USERNAME_CUST' => 'required',
        //     'PASSWORD_CUST' => 'required|min:8'
        // ]);
        // $user = Customer::where('USERNAME_CUST','=',$request->USERNAME_CUST)->first();
        // if($user)
        // {
        //     // if(Hash::check($request->PASSWORD_CUST,$user->PASSWORD_CUST))
        //     if ($request->PASSWORD_CUST == $user->PASSWORD_CUST)
        //     {
        //         // return back() -> with('success','aaaa');

        //         $request->session()->put('id_user',$user->ID_CUSTOMER);
        //         return redirect('/');
        //     }
        //     else
        //     {
        //         return back() -> with('fail','Username/Password is not regjnkistered/wrong');
        //     }
        // }else{
        //     return back() -> with('fail','Username/Password is not registered/wrong');
        // }
        // $request->validate([
        //     'USERNAME_CUST' => 'required',
        //     'PASSWORD_CUST' => 'required|min:8'
        // ]);

        // $user = Customer::where('USERNAME_CUST', '=', $request->USERNAME_CUST)->first();

        // if ($user) {
        //     if ($request->PASSWORD_CUST == $user->PASSWORD_CUST) {
        //         if ($request->has('REMEMBER_ME')) {
        //             Auth::login($user, true); // Set the "remember me" cookie for one week
        //         } else {
        //             Auth::login($user); // Log in without "remember me"
        //             $request->session()->regenerate(); // Regenerate the session ID to prevent session fixation
        //         }

        //         return redirect('/');
        //     } else {
        //         return back()->with('fail', 'Username/Password is not registered/wrong');
        //     }
        // } else {
        //     return back()->with('fail', 'Username/Password is not registered/wrong');
        // }

        //
        // dd($request->all());
        $remember = ($request->has('remember')) ? true : false;
        $credentials = $request->validate([
            'username_cust' => ['required'],
            'password' => ['required'],
        ]);
        // $userData = DB::select("SELECT * FROM customer WHERE USERNAME_CUST = :username_cust", ['username_cust' => $credentials['username_cust']]);
        $userData = Customer::where('USERNAME_CUST', '=', $credentials['username_cust'])->first();
        if (!empty($userData)) {
            dd($request->all());
            // $user = new Customer();
            // $user->fill((array) $userData[0]);

            // dd($user[0]);
            //  dd(Hash::make($user->PASSWORD_CUST));
            // dd($credentials, Auth::attempt($credentials));

            if (Auth::attempt($credentials)) {
                if ($remember == true) {
                    // Cookie::queue('username', $credentials['username'], 60);
                    // Cookie::queue('password', $credentials['password'], 60);
                    Auth::login($userData, $remember);
                    return redirect()->back();
                } else {
                    Auth::login($userData);
                    $request->session()->regenerate();
                    return redirect()->back();
                }

            } else {
                return view('shop-wishlist');
            }
        } else {
            return view('shop-wishlist');
        }



    }
    public function signup(Request $request)
    {
        // $request ->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:customer',
        //     'password' => 'required|min:8'
        // ]);
        // $user = new Customer();
        // $user->name = $request-> name;
        // $user->email = $request-> email;
        // $user->password = Hash::make($request-> password);
        // $res = $user->save();
        // if($res){
        //     return back()->with('success','Signup Successfully');
        // }else{
        //     return back() -> with('fail','Something wrong');
        // }
    }

    public function logout()
    {
        // if(session()->has('id_user')){
        //     session()->pull('id_user');
        //     return redirect('/');
        // }
        Auth::logout();
        Session::flush();
        Session::invalidate();
        Session::regenerateToken();

        return redirect()->intended('/');
    }
}
