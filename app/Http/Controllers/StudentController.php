<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(5);
      
        return view('students.index',compact('students'))
            ->with('students',$students);
    }
  
    public function create()
    {
        return view('students.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'ttl' => 'required',
            'nisn' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'ayah' => 'required',
            'kerja_ayah' => 'required',
            'ibu' => 'required',
            'kerja_ibu' => 'required',
            'no_hp' => 'required',
            'asal_sekolah' => 'required',
            'thn_lulus' => 'required',
        ]);
      
        Student::create($request->all());
       
        return redirect()->route('students.index')
                        ->with('success','Student created successfully.');
    }
  
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }
  
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'ttl' => 'required',
            'nisn' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'ayah' => 'required',
            'kerja_ayah' => 'required',
            'ibu' => 'required',
            'kerja_ibu' => 'required',
            'no_hp' => 'required',
            'asal_sekolah' => 'required',
            'thn_lulus' => 'required',
        ]);
      
        $student->update($request->all());
      
        return redirect()->route('students.index')
                        ->with('success','Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
       
        return redirect()->route('students.index')
                        ->with('success','Student deleted successfully');
    }
}
