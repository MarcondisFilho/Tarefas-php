<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Validation\Rule;


class TaskController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $loginEmail = Auth::user()->email;
        } else {
            // Usuário não autenticado
        }
        $user = DB::table('users')->where('email', $loginEmail)->first();


        //var_dump($user->id);

        $tasks = Task::where('user_id', $user->id)
            ->latest()
            ->paginate(10);


        return view('tasks.index', compact('tasks', 'user'));
    }

    public function create()
    {
        $loginEmail = Auth::user()->email;
        $user = DB::table('users')->where('email', $loginEmail)->first();

        return view('tasks.create', compact('user'));
    }


    public function store(Request $request)
    {

        $loginEmail = Auth::user()->email;
        $user = DB::table('users')->where('email', $loginEmail)->first();

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => ['required', Rule::in([$user->id])]
        ]);

        var_dump($request->all());

        Task::create($request->all());

        return redirect()->route('tasks.index')
            ->with('success', 'Tarefa criada com sucesso.');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')
            ->with('success', 'Tarefa atualizada com sucesso.');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Tarefa excluída com sucesso.');
    }
}
