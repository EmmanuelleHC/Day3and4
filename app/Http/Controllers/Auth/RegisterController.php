<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request)
    {
      

        User::create([
            'email'=>request('email'),
            'name'=>request('name'),
            'role_id'=>request('role_id'),
            'password'=>bcrypt(request('password')),
        ]);
        return  response('Thank you for registering');
    }
}
