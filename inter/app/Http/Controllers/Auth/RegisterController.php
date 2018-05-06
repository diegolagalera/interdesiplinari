<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
      dd("hola");
      $codi=str_random(25);
      $this->validate($request, [
          'name'=>'required|max:120',
          'email'=>'required|email|unique:users',
          'password'=>'required|min:6|confirmed'
      ]);
      $request['email_confirm']=$codi;
      $data1['name']=$request->name;
      $data1['email']=$request->email;
      $data1['email_confirm']=$request->email_confirm;
      $user = User::create($request->only('email', 'name', 'password','cognom','dni','tel','localitat')); //Retrieving only the email and password data
      $user->assignRole('user'); //Assigning role to user

      Mail::send('mails.register',['data'=>$data1],function($mail) use($data1){
        $mail->subject('confirma tu cuenta');
        $mail->to($data1['email'],$data1['name']);
      });


        return $user;
    }
}
