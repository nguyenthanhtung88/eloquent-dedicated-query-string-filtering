<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lesson;
use App\LessonFilters;

class LessonController extends Controller
{
    public function index(LessonFilters $filters)
    {
        return Lesson::filter($filters)->get();
        // $lesson = (new Lesson)->newQuery();

        // if ($request->exists('popular')) {
        //     $lesson->orderBy('views', 'desc');
        // }

        // if ($request->has('difficulty')) {
        //     $lesson->where('difficulty', $request->difficulty);
        // }

        // return $lesson->get();
    }
}
