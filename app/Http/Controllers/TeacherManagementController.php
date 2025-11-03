<?php

namespace App\Http\Controllers;
// namespace → Yeh batata hai ki yeh class Laravel ke App\Http\Controllers folder me hai.

use Illuminate\Http\Request;
use App\Models\TeacherManagement;

// use → Yeh dusre classes ko import karta hai:
// Request → HTTP requests handle karne ke liye (form data, GET/POST data).
// TeacherManagement → Aapka model jo database table teacher_managements ke saath linked hai.

class TeacherManagementController extends Controller
// Yeh controller Controller class se extend karta hai, jo Laravel ka base controller hai.
// Isme hum CRUD (Create, Read, Update, Delete) operations define karenge.
{
    // Display all teachers
    public function index()
    {
        $teachers = TeacherManagement::all();
        return view('teachers.index', compact('teachers'));
    }
// Purpose: Sare teachers ko list karna.
// TeacherManagement::all() → Database se sare records fetch karta hai.
// view('teachers.index', compact('teachers')) → teachers/index.blade.php view file me data bhejta hai.
// compact('teachers') → Ek shortcut jo $teachers variable ko view me bhej deta hai.

    // Show form to create new teacher
    public function create()
    {
        return view('teachers.create');
    }

// Purpose: Teacher add karne ka form dikhana.
// teachers.create → teachers/create.blade.php file ko open karta hai.

    // Store new teacher in DB
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email|unique:teacher_managements,email',
            'phone' => 'nullable',
        ]);

        TeacherManagement::create($request->all());

        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully.');
    }

// Purpose: Form submit hone ke baad data database me save karna.
// $request->validate([...]) → Form validation: ensure karta hai ki required fields filled ho, email valid aur unique ho.
// TeacherManagement::create($request->all()) → Model me data insert karta hai.
// Note: Model me fillable property define honi chahiye nahi to MassAssignmentException aayega.
// Redirect → Success message ke saath index page pe wapas le jata hai.

    // Show form to edit teacher
    public function edit(TeacherManagement $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

// Purpose: Existing teacher ke data ko edit form me dikhana.
// $teacher → Route model binding se automatically milta hai.
// compact('teacher') → Data view me bhejta hai.

    // Update teacher
    public function update(Request $request, TeacherManagement $teacher)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email|unique:teacher_managements,email,'.$teacher->id,
            'phone' => 'nullable',
        ]);

        $teacher->update($request->all());

        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
    }

// Purpose: Form se updated data ko database me save karna.
// Validation me email unique rule me exception diya $teacher->id → iska matlab ye email current teacher ka ho sakta hai.
// $teacher->update($request->all()) → Database me update karta hai.

    // Delete teacher
    public function destroy(TeacherManagement $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
    }

// Purpose: Teacher ko database se delete karna.
// $teacher->delete() → Record delete karta hai.
// Redirect → Index page pe success message ke saath.

}
