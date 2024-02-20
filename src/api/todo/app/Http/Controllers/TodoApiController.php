<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoApiController extends Controller
{
    public function index()
    {
        $todos = Todo::select('id', 'title')->get();
        return response()->json(['todo' => $todos]);
    }

    public function store(Request $req)
    {
        $jsonData = $req->json()->all();
        $title = $jsonData["todo"]["title"];
        Todo::create([
            "title" => $title,
        ]);
        $todos = Todo::select('id', 'title')->get();

        return response()->json(['todo' => $todos]);
    }

    public function update(Request $req, $id)
    {
        $todo=Todo::find($id);
        $jsonData = $req->json()->all();
        $title=$jsonData["todo"]["title"];
        $todo->title=$title;
        $todo->save();
        $todos = Todo::select('id', 'title')->get();

        return response()->json(["todo"=>$todos]);
    }

    public function delete($id)
    {
        $todo=Todo::find($id);
        $todo->delete();

        return response()->noContent();
    }
}
