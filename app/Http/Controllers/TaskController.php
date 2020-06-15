<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\User;
use App\Part;
use App\Order;

class TaskController extends Controller
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
        return view('tasks', array('tasks' => Task::all()));
    }

    /**
     * Show the form for creating a new task.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task_create', 
            array(
                'orders' => Order::pluck('name', 'id'),
                'users' => User::pluck('email', 'id'),
                'parts' => Part::pluck('name', 'code'),
            ));
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
            'deadline' => 'required|date',
            'order' => 'required|exists:orders,id',
            'responsible_employee' => 'nullable|exists:users,id',
            'part' => 'required|exists:parts,code',
            'amount' => 'required|integer|min:1',
        );
        $this->validate($request, $rules); 
        
        $task = new Task();
        $task->name = $request['name'];
        $task->deadline = $request['deadline'];
        $task->order = $request['order'];
        $task->responsible_employee = $request['responsible_employee'];
        $task->part = $request['part'];
        $task->amount = $task->amount_left = $request['amount'];
        $task->save();        
        return redirect()->route('tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('task', array('task' => Task::findOrFail($id)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('task_edit', array('task' => Task::findOrFail($id)));
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
            'deadline' => 'required|date',
            'order' => 'required|exists:orders,id',
            'responsible_employee' => 'nullable|exists:users,personal-number',
            'part' => 'required|exists:parts,code',
            'amount' => 'required|integer|min:0',
            'amount_left' => 'required|integer|min:0',
        );        
        $this->validate($request, $rules); 
        
        $task = Task::findOrFail($id);
        $task->name = $request['name'];
        $task->deadline = $request['deadline'];
        $task->order = $request['order'];
        $task->responsible_employee = $request['responsible_employee'];
        $task->part = $request['part'];
        $task->amount = $request['amount'];
        $task->amount_left = $request['amount_left'];
        $task->save();
        return redirect()->route('task', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks');
    }
}
