<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    //membuat function index untuk mengambil semua data student
    public function index()
    {
        $students = Student::all();
        
        $data = [
            'message' => 'Get all students',
            'data' => $students
        ];

        //mengembalikan data dalam bentuk json
        return response()->json($data, 200);    
    }

    public function store(Request $request){
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        $student = Student::create($input);

        $data = [
            'message' => 'Student is created succesfully',
            'data' => $student
        ];

        return response()->json($data, 201);
    }

    public function update(Request $request , $id){
        $student = Student::find($id);

        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        $student->update($input);

        $data = [
            'message' => 'Student is updated succesfully',
            'data' => $student
        ];
            return response()->json($data, 404);
    }

    public function destroy($id){
        $student = Student::find($id);

        $student->delete();

        $data = [
            'message' => 'Student is deleted succesfully',
            'data' => $student
        ];

        return response()->json($data, 200);
    }
}
