<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Support\Facades\Auth;
class TaskController extends Controller
{
    private $taskService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $tasks = $user->tasks;

        return view('home', compact('tasks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $userId = Auth::id();

        $this->taskService->store($data, $userId);

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        return view('show', compact('task'));
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
