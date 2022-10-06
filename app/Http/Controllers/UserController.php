<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        function validarAdmin(){
        
            if (auth()->user()->email == 'admin@admin1'){
                /* return response()->json([
                    'message' => 'Authorizado',
                    
                ], 200); */
                   $d='admin';
            }else{
                $d='no';
                /* return response()->json([
                    'message' => 'No Authorizado',
                    
                ], 401); */
                
            }
            return $d;
        }   

        $f = validarAdmin();
        if ($f == 'admin'){
            $users = User::all();
            return response($users, 200);
        }else{
            return response('TODO maL', 401);
        }
        
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        //
    }

    
}
