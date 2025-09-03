<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('is_completed', 'asc') // uncompleted muna, tapos completed
                    ->orderBy('created_at', 'desc')  // optional: bagong gawa sa taas
                    ->get();

        return view('tasks.index', compact('tasks'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Task::create([
            'title' => $request->title,
        ]);  
        return redirect('/');
    }

    public function update(Task $task)
    {
        $task->update([
            'is_completed' => !$task->is_completed, // toggle true/false
        ]);

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}
=======
<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('is_completed', 'asc') // uncompleted muna, tapos completed
                    ->orderBy('created_at', 'desc')  // optional: bagong gawa sa taas
                    ->get();

        return view('tasks.index', compact('tasks'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Task::create([
            'title' => $request->title,
        ]);  
        return redirect('/');
    }

    public function update(Task $task)
    {
        $task->update([
            'is_completed' => !$task->is_completed, // toggle true/false
        ]);

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}
>>>>>>> 264bb5773d1cca4e06312d3cb63a9eff71eef56e
