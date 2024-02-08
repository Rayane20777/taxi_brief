<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Driver;
use App\Models\Passenger;
use Illuminate\Http\Request;





class RegisterController extends Controller
{

    public function showRegistrationForm()
    {
        return view('register');
    }


    public function register(Request $request){
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        if($request->input('role') == 'driver'){
            Driver::create([
            'user_id' => $user->id,
            'description' => $request->input('description'),
            'plateNumber' => $request->input('plateNumber'),
            'vehicleType' => $request->input('vehicleType'),
            'location' => $request->input('location'),
            'statue' => $request->input('statue'),
            'paymentType' => $request->input('paymentType'),
            ]);
        } else {
            Passenger::create([
            'user_id' => $user->id,
            'phone' => $request->input('phone'),
            ]);
        }
    }
}
