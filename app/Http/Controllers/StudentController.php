<?php

// namespace App\Http\Controllers;

// use App\Models\Student;
// use Illuminate\Http\Request;

// class StudentController extends Controller
// {
//     public function index()
//     {
//         $students = Student::all();
//         return view('students.index', compact('students'));
//     }

//     public function create()
//     {
//         return view('students.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => 'required',
//             'email' => 'required|email|unique:students',
//             'phone' => 'required',
//         ]);

//         Student::create($request->all());
//         return redirect()->route('students.index')->with('success', 'Student created successfully.');
//     }

//     public function edit(Student $student)
//     {
//         return view('students.edit', compact('student'));
//     }

//     public function update(Request $request, Student $student)
//     {
//         $request->validate([
//             'name' => 'required',
//             'email' => 'required|email|unique:students,email,' . $student->id,
//             'phone' => 'required',
//         ]);

//         $student->update($request->all());
//         return redirect()->route('students.index')->with('success', 'Student updated successfully.');
//     }

//     public function destroy(Student $student)
//     {
//         $student->delete();
//         return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
//     }
// }




namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function index()
    // {
    //     $students = Student::join('classes', 'students.class_id', '=', 'classes.id')
    //         ->select('students.*', 'classes.class_name')
    //         ->get();

    //     return view('students.index', compact('students'));
    // }

    public function index(Request $request)
{
    $search = $request->input('search');

    $students = \DB::table('students')
        ->join('classes', 'students.class_id', '=', 'classes.id')
        ->select('students.*', 'classes.class_name')
        ->when($search, function ($query, $search) {
            $query->where('students.name', 'like', "%{$search}%")
                  ->orWhere('students.email', 'like', "%{$search}%")
                  ->orWhere('students.phone', 'like', "%{$search}%")
                  ->orWhere('classes.class_name', 'like', "%{$search}%");
        })
        ->get();

    return view('students.index', compact('students', 'search'));
}


    public function create()
    {
        $classes = SchoolClass::all();
        print_r($classes);
    
        return view('students.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
            'class_id' => 'required'
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function edit(Student $student)
    {
        $classes = SchoolClass::all(); // ✅ fixed
        return view('students.edit', compact('student', 'classes'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required',
            'class_id' => 'required'
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
