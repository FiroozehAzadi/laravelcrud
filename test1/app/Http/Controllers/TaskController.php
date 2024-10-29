<?php
namespace App\Http\Controllers;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('tasks.showTask')->with('tasks',Task::all());
      // return 'hello,world!';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("tasks.createTask");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        //
        $task = Task::create($request->all());
        return view('tasks.showTask')->with('tasks',Task::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $task = Task::findOrFail($request->id);

        return view('tasks.showTask')->with('tasks',$task);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $task = Task::findOrFail($id);

        return view('tasks.editTask')->with('task',$task);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
        $task = Task::findOrFail($request->id);

        $task->update($request->all());
        $task = Task::all();
        return view('tasks.showTask')->with('tasks',$task);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Task $task)
    {
        //
        $task = Task::findOrFail($request->id);

        $task->delete();
        $task = Task::all();
        return view('tasks.showTask')->with('tasks',$task);

    }
}
