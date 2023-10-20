<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    //
    public function index() {
        $lessons = Lesson::all();

        //$students = Kategori::paginate(3);
        return view('index', ['lessons' => $lessons,]);
    }

    public function show($id) {
        $lesson = Lesson::find($id);
        return view('show', ['lesson' => $lesson]);
    }
}