<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Customer;

class CustomersController extends Controller
{
    //
    public function all()
    {
    //     try {

    //         if (! $user = JWTAuth::parseToken()->authenticate()) {
    //                 return response()->json(['user_not_found'], 404);
    //         }

    // } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

    //         return response()->json(['token_expired'], $e->getStatusCode());

    // } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

    //         return response()->json(['token_invalid'], $e->getStatusCode());

    // } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

    //         return response()->json(['token_absent'], $e->getStatusCode());

    // }
        $customers = Customer::all();
        // dd($customers);
        // return response()->json(compact('user'));
        return response()->json(compact([
            "customers"=> $customers
        ]), 200);

    }
    public function get($id)
    {
        $customers = Customer::whereId($id)->first();
        return response()->json([
            "customers"=> $customers
        ], 200);
    }
    public function new(Request $request)
    {
        $customer = Customer::create($request->only(["name","email","phone","website"]));
        return response()->json([
            "customer" => $customer
        ], 200);
    }
}