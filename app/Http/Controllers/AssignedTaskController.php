<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class AssignedTaskController extends Controller
{
    public function index()
    {
        return view('my_tasks', array('task' => Order::where('responsible_employee','=',Auth::id())->get()));
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        if( $task->responsible_employee == Auth::id() )
            return view('my_task', array('task' => $task));
        else 
            return redirect()->route('my_tasks');
    }

    public function edit_progress($id)
    {
        $task = Task::findOrFail($id);
        if( $task->responsible_employee == Auth::id() )
            return view('task_progress_update', array('task' => $task));
        else 
            return redirect()->route('my_tasks');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_progress(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        
        $rules = array(
            'amount_made' => 'required|max:'.$task->amount_left
        );        
        $this->validate($request, $rules); 
        
        $task->amount_left -= $request['amount_made'];
        $task->save();
        return redirect()->route('my_task', $id);
    }
}
