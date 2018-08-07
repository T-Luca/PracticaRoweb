<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    public function index(){
        //fetch all users data
        $users = User::orderBy('id')->get();

        //pass users data to view and load list view
        return view('users.index', ['users' => $users]);
    }

    public function add(){
        //load form view
        return view('users.add');
    }

    public function insert(Request $request){
        //validate task data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        //get task data
        $userData = $request->all();

        //insert task data
        User::create($userData);

        //store status message
        Session::flash('success_msg', 'User added successfully!');

        return redirect()->route('users.index');
    }

    public function edit($id){
        //get user data by id
        $user = User::find($id);

        //load form view
        return view('users.edit', ['user' => $user]);
    }

    public function update($id, Request $request){
        //validate task data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        //get task data
        $userData = $request->all();

        //update task data
        User::find($id)->update($userData);

        //store status message
        Session::flash('success_msg', 'User updated successfully!');

        return redirect()->route('users.index');
    }

    public function delete($id){
        //update task data
        User::find($id)->delete();

        //store status message
        Session::flash('success_msg', 'User deleted successfully!');

        return redirect()->route('users.index');
    }
}
