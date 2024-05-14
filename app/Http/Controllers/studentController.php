<?php

namespace App\Http\Controllers;

use App\Http\Requests\studentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class studentController extends Controller
{

    public function index()
    {
        $all_students = Student::all();
        return view('students.index', [
            'students' => $all_students,
        ]);
    }

    public function getUser($id)
    {
        return "Details page of student #{$id}";
    }

    public function getUserName($id, $name = "not provided")
    {
        return "Details page of student #{$id} named {$name}";
    }

    public function getCreatedUser()
    {
        return view('students.create');
    }

    public function store(studentRequest $request)
    {

        // create a new student
        $student = new Student();

        // fill student information
        $student->name = $request->name;
        $student->age = $request->age;
        $student->IDno = $request->IDno;

        // save it into database
        $student->save();

        return redirect('/students/create')->with('success', 'student created successfully');
    }

    public function editUser(Student $id)
    {
        // dd($student);
        return view('students.edit', [
            'stud' => $id,
        ]);
    }

    public function update(studentRequest $request, Student $id)
    {
        // fille the student with new information
        $id->name = $request->name;
        $id->age = $request->age;
        $id->IDno = $request->IDno;

        if ($id->save()) {
            return redirect('/students')->with('success', 'student updated successfully');
        }
    }

    public function destroy(Student $id)
    {
        $id->delete();
        return redirect()->route("students.index")->with('success', 'student deleted successfully');
    }


}
