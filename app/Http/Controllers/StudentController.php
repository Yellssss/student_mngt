<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function index()
    {   
        $students = Student::get();

        return view('student.index', compact('students')); t
    }

    public function create()
    {
        return view('student.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'midname' => 'required|max:255|string',
            'age' => 'required|integer',
            'address' => 'required|max:255|string',
            'zip' => 'required|integer',
        ]);

        Student::create($request->all()); // Store student data
        return view('student.create'); // Redirect to student creation page
    }

    public function edit(int $id)
    {
        $student = Student::find($id); // Fetch student by id
        return view('student.edit', compact('student')); // Use student in the view
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'fname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'midname' => 'required|max:255|string',
            'age' => 'required|integer',
            'address' => 'required|max:255|string',
            'zip' => 'required|integer',
        ]);

        Student::findOrFail($id)->update($request->all()); // Update student record
        return redirect()->back()->with('status', 'Student Updated Successfully!');
    }

    public function destroy(int $id)
    {
        $student = Student::findOrFail($id); // Fetch student by id
        $student->delete(); // Delete student record
        return redirect()->back()->with('status', 'Student Deleted');
    }
}
