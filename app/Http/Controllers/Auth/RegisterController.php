<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default, this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * @param  array  $user
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $user): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($user, [
            'accountType' => ['required', 'string'],
            'avatarSrc' => ['image'],
            'fullName' => ['required', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'contactNumber' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
            'addressLineOne' => ['required', 'string', 'max:191'],
            'addressLineTwo' => ['required', 'string', 'max:191'],
            'addressState' => ['required', 'string', 'max:191'],
            'addressCode' => ['required', 'string', 'max:191'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $user
     * @return User
     */
    protected function create(array $user): User
    {
        return User::create([
            'accountType' => $user['accountType'],
            'avatarSrc' => $user['avatarSrc'],
            'fullName' => $user['fullName'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
            'contactNumber' => $user['contactNumber'],
            'addressLineOne' => $user['addressLineOne'],
            'addressLineTwo' => $user['addressLineTwo'],
            'addressState' => $user['addressState'],
            'addressCode' => $user['addressCode'],
        ]);
    }
}
