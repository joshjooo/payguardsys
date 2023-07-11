<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                // All User
        $posts = User::all();

        // Return Json Response
        return response()->json([
            'users' => $posts
        ],200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {    
        // try{
          
            $password = Hash::make($request->password); 
              
            User::create([
                'user_name' => $request->name,
                'user_email' => $request->email,
                'user_password' => $password,
                'user_mobile' => $request->mobile
                
            ]);

            return response()->json([
                'message' => "User successfully created."
            ],200);


    //      } catch (\Exception $e) {
    //     // Return Json Response
    //     return response()->json([
    //         'message' => "Something went really wrong!"
    //     ],500);
    // }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            // User Detail 
        $user = User::find($id);
        if(!$user){
            return response()->json([
                'message'=>'User Not Found.'
            ],404);
        }

        // Return Json Response
        return response()->json([
            'user' => $user
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // Find User
        $user = User::find($id);
        if(!$user){
          return response()->json([
            'message'=>'user Not Found.'
          ],404);
        }
          
         $user->delete();

        // Return Json Response
        return response()->json([
            'message' => "user successfully deleted."
        ],200);
    }

    public function logout() {
         
        Auth::logout();

         return redirect('/');

    }
}
