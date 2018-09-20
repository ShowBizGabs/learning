<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth')->except(['index']);
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::withCount(['student'])
            ->with('category', 'teacher', 'reviews')
            ->where('status', Course::PUBLISHED)
            ->latest()
            ->paginate(12);
        return view('home', compact('courses'));
    }

}
