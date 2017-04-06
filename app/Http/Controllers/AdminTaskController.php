<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;


use App\Task;

use Carbon\Carbon;


use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $task =Task::all();
       return view('admin.task.index',compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Task::create($request->all());
        Session::flash('create', 'User Update_user');

        return redirect('admin/task');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(task $task)
    {
        //
        $task= $task->id;
        $tasks = Task::findOrFail($task);
        Session::flash('edit', 'User Update_user');

        return view('admin.task.edit',compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, task $task)
    {
        $task = $task->id;
       Task::findOrFail($task)->update($request->all());
        Session::flash('update', 'User Update_user');

        return redirect('admin/task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(task $task)
    {
        $task = $task->id;
        Task::findOrFail($task)->delete();
        Session::flash('delete', 'User Update_user');
        return redirect('admin/task');
    }
}
