<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name'                  =>'required|max:50',
            'username'              => 'required|string|regex:/\w*$/|max:255|unique:users,username,',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:6'
        ]);

        if ($validate->fails()){

            return response()->json([
                'status'        =>false,
                'message'       =>"Your Validation Failed...!",
                'data'          =>$validate->errors(),
            ],400);

        }else{
            try {
                $emailVerificationToken = rand(111111,999999);

                $user = User::create([
                    'name'      =>$request->input('name'),
                    'username'  =>$request->input('username'),
                    'email'     =>Str::lower($request->input('email')),
                    'password'  =>Hash::make($request->input('password')),
                    'email_verification_token'=>$emailVerificationToken,
                ]);

                $passportToken = $user->createToken('passportToken')->accessToken;

                Mail::to($user->email)->send(new VerificationEmail($user));

                return response()->json([
                    'status'    =>true,
                    'message'   =>"Verification Code Send Successfully...",
                    '_token'    =>" ",
                ],200);

            }catch (\Exception $exception){
                return response()->json([
                    'status'    =>false,
                    'message'   =>"Your Registration Failed...!",
                    'data'      =>$exception->getMessage(),
                ],400);
            }
        }
    }

    public function verification(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email_verification_token'=>'required',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => "Your Validation Failed...!",
                'data' => $validate->errors(),
            ], 400);
        }


        $emailVerificationToken = $request->input('email_verification_token');

        try {
            $user = User::where('email_verification_token',$emailVerificationToken)->first();


            if ($emailVerificationToken && $user->email_verification_token){
                if ($emailVerificationToken == $user->email_verification_token){

                    $user->update([
                        'email_verification_token'  =>0,
                        'email_verified_at'         =>Carbon::now(),
                    ]);


                    return response()->json([
                        'status'    =>true,
                        'message'   =>"Your Registration Successfully . Can You Login Now...",
                        'data'      =>$user,
                    ],201);
                }else{
                    return response()->json([
                        'status'    =>false,
                        'message'   =>"You Unauthorized...!",
                    ],401);
                }
            }else{
                return response()->json([
                    'status'        =>false,
                    'message'       =>"Invalid Token .....!",
                ],401);
            }


        }catch (\Exception $exception){
            return response()->json([
                'status'        =>false,
                'message'       =>"You Unauthorized...! ",
                'data'          =>$exception->getMessage(),
            ],401);
        }
    }

    public function login(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email'             =>'required|email',
            'password'          => 'required|min:6',
        ]);

        if ($validate->fails()){

            return response()->json([
                'status'        =>false,
                'message'       =>"Your Validation Failed...!",
                'data'          =>$validate->errors(),
            ],400);

        }else{
            try {
                $user = User::where('email',$request->input('email'))->first();
                if ($user && $user->email == $request->input('email')){
                    if (Hash::check($request->input('password') , $user->password)){
                        $passportToken = $user->createToken('passportToken')->accessToken;
                        return response()->json([
                            'status'    =>true,
                            'message'   =>'You are login successfully...',
                            '_token'    =>$passportToken,
                            'data'      =>$user,
                        ],200);
                    }else{
                        return response()->json([
                            'status'    =>false,
                            'message'   =>"Invalid Your Password....!",
                        ],401);
                    }
                }else{
                    return response()->json([
                        'status'    =>false,
                        'message'   =>"Invalid Your Email Address....!",
                    ],401);
                }
            }catch (\Exception $exception){
                return response()->json([
                    'status'    =>false,
                    'message'   =>"Your Login Failed...!",
                    'data'      =>$exception->getMessage(),
                ],400);
            }
        }
    }

    public function user()
    {
        return response()->json([
            'status'    =>true,
            'message'   =>'Successfully come to dashboard',
            'data'      =>Auth::user(),
        ],200);
    }

    public function mylogout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
           'status'=>true,
           'message'=>"Your Logout Successfully",
        ]);

    }
}
