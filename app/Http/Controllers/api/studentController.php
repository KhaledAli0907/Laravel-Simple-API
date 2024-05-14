<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index() {
        $students = Student::all();

        return $students;
    }
}
