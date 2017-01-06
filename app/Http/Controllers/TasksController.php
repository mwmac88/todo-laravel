<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use Redirect;

class TasksController extends Controller
{
  protected $rules = [
		'name' => ['required', 'min:3'],
		'description' => ['required']
	];

  public function index()
  {
    $tasks = Task::orderBy('created_at', 'desc')->get();

    $filter = Input::get('taskscompleted');

      if ($filter !== null)
      {
          $tasks = Task::where('completed', '=', $filter)->get();
      }

    return view('tasks.index', [
        'tasks' => $tasks
    ]);
  }

  public function create(Task $task)
  {
    return view('tasks.create', compact('task'));
  }

  public function store(Task $task, Request $request)
  {
    $this->validate($request, $this->rules);

    $input = Input::all();

    $input['slug'] = $request->name;

    Task::create( $input );

    return Redirect::route('tasks.show', $task->slug)->with('message', 'Task created.');
  }

  public function show(Task $task)
  {
  	return view('tasks.show', compact('task'));
  }

  public function edit(Task $task)
  {
  	return view('tasks.edit', compact('task'));
  }

  public function update(Task $task, Request $request)
  {
    // $this->validate($request, $this->rules);
    // $input['task_id'] = $task->id;

  	$input = array_except(Input::all(), '_method');

  	$task->update($input);

  	return Redirect::route('tasks.index')->with('message', $task->name . ' updated.');
  }

  public function destroy(Task $task)
  {
  	$task->delete();

  	return Redirect::route('tasks.index')->with('message', 'Task deleted.');
  }
}
