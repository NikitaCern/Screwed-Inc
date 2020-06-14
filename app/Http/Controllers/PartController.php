<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Part;

class PartController extends Controller
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
        return view('parts', array('parts' => Part::all()));
    }

    /**
     * Show the form for creating a new part.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('part_create');
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
            'code' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
        );        
        $this->validate($request, $rules); 
        
        $part = new Part();
        $part->code = $request['code'];
        $part->name = $request['name'];
        $part->description = $request['description'];
        $part->save();        
        return redirect()->route('parts');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $code
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('part', array('part' => Part::where('code','=', $code)->first()));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $code
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        return view('part_edit', array('part' => Part::where('code','=', $code)->first()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        $rules = array(
            'name' => 'required|string',
            'description' => 'required|string',
        );        
        $this->validate($request, $rules); 
        
        $part = Part::where('code','=', $code)->first();
        $part->name = $request['name'];
        $part->description = $request['description'];
        $part->save();
        return redirect()->route('part', $code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        $part = Part::where('code','=', $code)->first();
        $part->delete();
        return redirect()->route('parts');
    }
}
