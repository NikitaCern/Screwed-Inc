<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

class OrderController extends Controller
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
        return view('orders', array('orders' => Order::all()));
    }

    /**
     * Show the form for creating a new order.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order_create');
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
            'name' => 'required|string',
            'description' => 'required|string',
            'deadline' => 'required|date',
        );        
        $this->validate($request, $rules); 
        
        $order = new Order();
        $order->name = $request['name'];
        $order->description = $request['description'];
        $order->deadline = $request['deadline'];
        if ( !isset($request['is_done']) || $request['is_done']==null )    
            $order->is_done = 0;
        else 
            $order->is_done = 1;
        $order->save();        
        return redirect()->route('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('order', array('order' => Order::findOrFail($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('order_edit', array('order' => Order::findOrFail($id)));
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
            'name' => 'required|string',
            'description' => 'required|string',
            'deadline' => 'required|date',
            'is_done' => 'required|integer|min:0|max:0',
        );        
        $this->validate($request, $rules); 
        
        $order = Order::findOrFail($id);
        $order->name = $request['name'];
        $order->description = $request['description'];
        $order->deadline = $request['deadline'];
        $order->is_done = $request['is_done'];
        $order->save();        
        return redirect()->route('order', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('orders');
    }
}
