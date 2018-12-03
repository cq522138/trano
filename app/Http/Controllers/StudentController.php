<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\student;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index()
    {
        $students = student::paginate(2);
//        $students = student::all();
        return view('list', compact('students'));
    }

    public function destroy($id)
    {
        $student = student::findOrFail($id);
        $student->delete();
        Session::flash('success', 'Xóa khách hàng thành công');
        return redirect()->route('students.index');
    }

    public function create()
    {
        return view('create');
    }

    public function store(request $request)
    {
        $student = new student();
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone_number = $request->input('phone_number');
        $student->birthday = $request->input('birthday');
        $student->address = $request->input('address');
        $student->person_contact_1 = $request->input('person_contact_1');
        $student->phone_person_contact_1 = $request->input('phone_person_contact_1');
        $student->person_contact_2 = $request->input('person_contact_2');
        $student->phone_person_contact_2 = $request->input('phone_person_contact_2');
        $student->save();

        Session::flash('success', 'Tạo mới thành công');
        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = student::findOrFail($id);
        return view('edit', compact('student'));
    }

    public function update(request $request, $id)
    {
        $student = student::findOrFail($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone_number = $request->input('phone_number');
        $student->birthday = $request->input('birthday');
        $student->address = $request->input('address');
        $student->person_contact_1 = $request->input('person_contact_1');
        $student->phone_person_contact_1 = $request->input('phone_person_contact_1');
        $student->person_contact_2 = $request->input('person_contact_2');
        $student->phone_person_contact_2 = $request->input('phone_person_contact_2');
        $student->save();
        Session::flash('success', 'Cập nhật hoc sinh thành công');
        return redirect()->route('students.index');
    }

    public function search(request $request)
    {
//        dd($request);
        $keyword = $request->input('keyword');
//        dd($keyword);
        if(!$keyword){
            return redirect()->route('students.index');
        }

        $students = student::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);

//        dd($students);

//       $cities = City::all();
        return view('list', compact('students'));


    }

//    public function getLogin()
//    {
//        return view('home');
//    }

}
