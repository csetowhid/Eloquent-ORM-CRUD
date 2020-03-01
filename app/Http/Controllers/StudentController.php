<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        return view('student.home');
    }
    function insert(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:25|min:4',
            'phone' => 'required|unique:students|max:12|min:9',
            'email' => 'required|unique:students',
        ]);
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        $notification=array(
            'message'=>'Successfully Student Inserted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    function read()
    {
        $student= Student::all();
        return view('student.view',compact('student'));
    }
    function show($id)
    {
        $student = Student::findorfail($id);
        return response()->json($student);
    }
    function delete($id)
    {
        $student = Student::findorfail($id);
        $student->delete();
        $notification=array(
            'message'=>'Student Deleted Successfully',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);

    }
    function edit($id)
    {
        $student = Student::findorfail($id);
        return view('student.edit',compact('student'));
    }
    function update(Request $request, $id)
    {
        $student = Student::findorfail($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        $notification=array(
            'message'=>'Student Updated Successfully',
            'alert-type'=>'info'
        );
        return Redirect()->route('allstudent')->with($notification);
    }
}
