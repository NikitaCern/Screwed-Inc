<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function __construct() {
        //$this->middleware('admin')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users', array('users' => User::all()));
    }

    /**
     * Show the form for creating a new part.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  string  $code
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('users', array('users' => User::where('personal_number','=', $code)->first()));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $code
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users_edit', array('users' => User::where('id','=', $id)->first()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'post' => 'required|string|min:3',
            'roles' => 'required|string|in:auth_user,task_distr,order_mng,part_mng,admin',
            'preferred_language' => 'required|string|in:en,lv'
        );
        $this->validate($request, $rules);

        $user = User::where('id','=', $id)->first();
        var_dump($user);
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->post = $request['post'];
        $user->roles = $request['roles'];
        $user->preferred_language =   $request['preferred_language'];

        $user->save();
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id','=', $id)->first();
        $user->delete();
        return redirect()->route('users');
    }
}
