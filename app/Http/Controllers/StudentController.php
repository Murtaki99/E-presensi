<?php

namespace App\Http\Controllers;


use App\Models\Student;
use App\Models\Local;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.students.index', [
            'active' => 'students',
            'title'  => 'All Students',
            'students' => Student::latest()->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.students.create', [
            'title' => 'Create Student',
            'locals' => Local::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'  => 'required|max:255',
            'nisn'  => 'required|unique:students|max:10',
            'slug' => 'required|unique:students',
            'local_id' => 'required'
        ]);
        Student::create($validateData);
        return redirect('/dashboard/students')->with('success', 'New Student Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $rules = [
            'name'  => 'required|max:255',
            'class' => 'integer|required',
            'local' => 'nullable'
        ];
        if ($request->nisn != $student->nisn) {
            $rules['nisn'] = 'required|unique:students|max:10';
        }
        $validateData = $request->validate($rules);
        Student::where('id', $student->id)->update($validateData);
        return redirect('/dashboard/students')->with('success', 'Student has been updated ');
    }

    /**
     * Remove the specified resource from storage.
     */
    // CONTROLLER DELE
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return back()->with('info', 'Student has been deleted ');
    }
    // END CONTROLLER DELETE


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Student::class, 'slug', $request->nisn);
        return response()->json(['slug' => $slug]);
    }
}
