<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('register.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'lac'=>'required',
            'no_polis'=>'required',
            'username'=>'required',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required'
        ]);

        // $table->id('nasabah_id');
        // $table->string('lac');
        // $table->string('no_polis');
        // $table->string('username');
        // $table->string('email')->unique();
        // $table->timestamp('email_verified_at')->nullable();
        // $table->string('password');
        // $table->rememberToken();
        // $table->timestamps();

        User::create($validate);


        return response()->json([
            'status' => 'success',
            'message' => 'Selamat, Anda telah berhasil mendaftar!',
        ]);


        return response()->json(['message'=> 'User has been registered'],200)->redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
