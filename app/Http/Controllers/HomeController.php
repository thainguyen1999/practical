<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function listStudents(){
        $students = Students::all();
        return view('Students.list_students', compact('students'));
    }

    public function createStudents(){

        return view('Students.create_students');
    }
    public function addStudents(Request $request){
        $data = $request->all();
        $validate = $request->validate([
            'name'=>'required|max:255',
            'age'=>'required',
            'address'=>'required|max:200',
            'telephone'=>'required|max:20',
        ], [
            'name.required'=>'Bạn chưa nhập tên sinh viên!',
            'age.required'=>'Bạn chưa nhập tuổi!',
            'address.required'=>'Bạn chưa nhập địa chỉ!',
            'telephone.required'=>'Bạn chưa nhập số điện thoại!',
        ]);
        Students::create($data);
        return back()->with('success', 'Thêm thành công!');
    }

    public function getUpdateStudents($id){
        $student_detail = Students::findOrFail($id);
        return view('Students.update_students', compact('student_detail'));
    }

    public function updateStudents(Request $request, $id){
        $data = $request->all();
        $students_update = Students::findOrFail($id);
        $students_update -> update($data);
        return redirect(route('listStudents'))->with('success', 'Chỉnh sửa thành công');
    }

    public function deleteStudents($id){
        $students = Students::findOrFail($id);
        $students->delete();
        return redirect(route('listStudents'))->with('success', 'Đã xóa!');
    }
}
