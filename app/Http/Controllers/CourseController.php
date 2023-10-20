<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function index() {
        $courses = Course::all();

        //$students = Kategori::paginate(3);
        return view('index', ['courses' => $courses,]);
    }

    public function show($id) {
        $course = Course::find($id);
        return view('show', ['course' => $course]);
    }
}