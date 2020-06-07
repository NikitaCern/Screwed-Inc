<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskDistributorController extends Controller
{
    public function index()
    {
        return view('tasks', array('tasks' => Task::all()->get()));
    }

    public function change_resp_employee($id)
    {
        return view('task_employee', array('task' => Task::findOrFail($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_resp_employee(Request $request, $id)
    {
        $rules = array(
            'responsible_employee' => 'nullable|exists:users,personal-number'
        );        
        $this->validate($request, $rules); 
        
        $task = Task::findOrFail($id);
        $task->responsible_employee = $request['responsible_employee'];
        $task->save();
        return redirect()->route('task', $id);
    }
}
