<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Session;

class CRUDController extends Controller
{
    public function index(){
        //fetch all tasks data
        $tasks = Task::orderBy('id')->get();

        //pass tasks data to view and load list view
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function add(){
        //load form view
        return view('tasks.add');
    }

    public function insert(Request $request){
        //validate task data
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        //get task data
        $taskData = $request->all();

        //insert task data
        Task::create($taskData);

        //store status message
        Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('tasks.index');
    }

    public function edit($id){
        //get task data by id
        $task = Task::find($id);

        //load form view
        return view('tasks.edit', ['task' => $task]);
    }

    public function update($id, Request $request){
        //validate task data
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        //get task data
        $taskData = $request->all();

        //update task data
        Task::find($id)->update($taskData);

        //store status message
        Session::flash('success_msg', 'Task updated successfully!');

        return redirect()->route('tasks.index');
    }

    public function delete($id){
        //update task data
        Task::find($id)->delete();

        //store status message
        Session::flash('success_msg', 'Task deleted successfully!');

        return redirect()->route('tasks.index');
    }
}
