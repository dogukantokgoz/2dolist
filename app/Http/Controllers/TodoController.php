<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use App\Http\Requests\TodoRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function __construct()
    {

        $this->middleware(function ($request, $next) {
            if (Auth::check()) {
                $user = Auth::user();
                view()->share('user', $user);
            }
            return $next($request);
        });
    }

    public function index()
    {
        $user = auth()->user();
        $todos = Todos::where('user_id', $user->id)->get();

        return view('index', ['todos' => $todos]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(TodoRequest $request)
    {
        $user_id = Auth::user()->id;
        Todos::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'description' => $request->description,
            'status' => 0
            ]);
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $todo = Todos::find($id);
        return view('edit', ['todo' => $todo]);
    }

    public function update(TodoRequest $request)
    {
       $todo = Todos::find($request->todo_id);
       $todo->update([
           'title' => $request->title,
           'description' => $request->description,
           'status' => $request->status,
       ]);
       return redirect()->route('index');
    }

    public function show($id)
    {
    $todo = Todos::find($id);

    return view('show', ['todo' => $todo]);
    }

    public function destroy(Request $request)
    {
        $todo = Todos::find($request->todo_id);
        $todo->delete();

        return redirect()->route('index');
    }

    public function trashed()
    {
        $user = auth()->user();
        $todos = Todos::onlyTrashed()->where('user_id', $user->id)->get();
        return view('trashed',compact('todos'));
    }

    public function recover($id)
    {
        Todos::onlyTrashed()->find($id)->restore();
        return redirect()->back();
    }

    public function hardDelete($id)
    {
        $todos = Todos::onlyTrashed()->find($id);
        $todos->forceDelete();

        return redirect()->back();
    }
}
