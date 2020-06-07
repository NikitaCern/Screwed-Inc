<?php

namespace App\Http\Controllers;

use Illuminate\Auth\UserInterface;
use Illuminate\Http\Request;

use App\User;

class AdministratorController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users', array('users' => User::all()->get()));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'personal_number' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'post' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'roles' => 'required|json',
        );
        $this->validate($request, $rules); 
        
        $user = new User();
        $user["personal-number"] = $request['personal-number'];
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->post = $request['post'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();        
        return redirect()->route('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user_edit', array('user' => Task::findOrFail($id)));
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
        $rules = array(
            'personal_number' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'post' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'roles' => 'required|json',
        );
        $this->validate($request, $rules); 
        
        $user = User::findOrFail($id);
        $user["personal-number"] = $request['personal-number'];
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->post = $request['post'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();        
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id == Auth::id()) return redirect()->route('users'); // Do not delete yourself

        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users');
    }
}
