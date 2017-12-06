<?php
namespace App\Http\Controllers;

/**
 * Library injections
 */
use Illuminate\Http\Request;
use Validator;
use Auth;

/**
 * Model injections
 */
use App\User;
use App\Task;

class TaskController extends Controller {

    /**
     * Renders the user correlated list of tasks
     * @return \Illuminate\View
     */
    public function all() {
        $tasks = Task::orderBy('created_at', 'DESC')->get();
        return view('home', compact('tasks'));
    }

    /**
     * Create a new instance of the Task Model
     * and save its properties.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Collection
     */
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/home')
                        ->withErrors($validator)
                        ->withInput();
        }

        $task = Task::create([
            'name' => $request->input('name')
        ]);

        if ($task && !is_null($task)) {
            return redirect(route('home'))->with('success', 'All set! Have a great day!');
        } else {
            return redirect(route('home'))->with('error', 'Oh snap! The postman got lost. Try again!');
        }


    }

}
