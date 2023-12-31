<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Network;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function loadRegister()
    {
        return view('auth.register');
    }

    public function registered(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $referralCode = Str::random(10);
        $token = Str::random(50);

        if (isset($request->referral_code)) {

            $userData = User::where('referral_code', $request->referral_code)->get();

            if(count($userData) > 0){

                $user_id = User::insertGetId([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'referral_code' => $referralCode,
                    'remember_token' => $token
                ]);
                Network::insert([
                    'referral_code' => $request->referral_code,
                    'user_id' => $user_id,
                    'parent_user_id' => $userData[0]['id'],
                ]);

            }
            else{
                return back()->with('error', 'Please enter Valid Referral Code!');
            }

        }
        else{

            User::insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'referral_code' => $referralCode,
                'remember_token' => $token
            ]);

         }

         $domain= URL::to('/');
            $url = $domain.'/referral-register?ref='.$referralCode;

            $data = [ 
                'url' => $url,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'title' => 'Registered',
            ];
            
            Mail::send('emails.registerMail', ['data' => $data], function ($message) use ($data) {
                $message->to($data['email'])->subject($data['title']);
            });    
            
            //verification mail send
            $url = $domain.'/email-verification/'.$token;

            $data = [ 
                'url' => $url,
                'name' => $request->name,
                'email' => $request->email,
                'title' => 'Referral VerificationMail',
            ];

            Mail::send('emails.verifyMail', ['data' => $data], function ($message) use ($data) {
                $message->to($data['email'])->subject($data['title']);
            });
         
         return back()->with('success', 'Your Registration has been Successfull & Please Check your Mail for Verification!');

    }

    public function loadReferralRegister(Request $request)
    {
        if (isset($request->ref)) {
            $referral = $request->ref;
            $userData = User::where('referral_code',$referral)->get();

            if(count($userData) >0){

                return view('referral.referralRegister', compact('referral'));

            }else{
                return view('errors.404');
            }
        }
        else{
            return redirect('/');
        }
    }

    public function emailVerification($token)
    {
        $userData = User::where('remember_token', $token)->get();

        if(count($userData) > 0){

            if($userData[0]['is_verified'] == 1){
                return view('verified.verified', ['message' => 'Your Mail is Already Verified!']);
            }

            User::where('id',$userData[0]['id'])->update([
                'is_verified' => 1,
                'email_verified_at' => date('Y-m-d H:i:s')
            ]);
            return view('verified.verified', ['message' => 'Your '.$userData[0]['email'].' Mail verified Successfully!']);
        }
        else{
            return view('verified.verified', ['message' => '404 Page Not Found!']);
        }
    }

    public function loadLogin(){
        return view('auth.login');
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required'
        ]);

        $userData = User::where('email', $request->email)->first();
        if(!empty($userData)){
            if($userData->is_verified == 0){
                return back()->with('error', 'Please Verify your Mail!');
            }
        }

        $useCredential = $request->only('email', 'password');
        if(Auth::attempt($useCredential)){
            return redirect('/dashboard');
        }
        else{
            return back()->with('error', 'Username & Password is incorect!');
        }
    }
    public function loadDashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        // return redirect('/login');
        return view ('auth.logout');
    }
}
