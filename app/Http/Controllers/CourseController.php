<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show(Course $course){
       $course->load([
            'category' => function($q){
                $q->select('id', 'name');
            },
            'goals' => function($q){
                $q->select('id', 'course_id', 'goal');
            },
            'level' => function($q){
                $q->select('id', 'name');
            },
            'requirement' => function($q){
                $q->select('id', 'course_id', 'requeriment');
            },
            'reviews.user',
            'teacher'
        ])->get();

       $related = $course->relatedCourses();

       return view('courses.detail', compact('course', 'related'));
    }
}
