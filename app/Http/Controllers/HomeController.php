<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

        Task::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => Auth::id(),
        ]);

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
