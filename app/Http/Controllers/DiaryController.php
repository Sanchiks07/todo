<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index(){
        $diaries = Diary::all();
        return view("diaries.index", compact("diaries"));
    }

    public function show(Diary $diary) {
        return view("diaries.show", compact("diary"));
    }

    public function create(Diary $diary) {
        return view("diaries.create", compact("diary"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "max:255"],
            "body" => ["required", "max:100"],
            "date" => ["required", "date"]
        ]);
        Diary::create([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "date" => $validated["date"]
        ]);
        return redirect("/diaries");
    }
}
