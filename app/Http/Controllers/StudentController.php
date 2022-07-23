<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function  index(){
        //$students = Student::all();
        $students = Student::query()->get();

        return view('students.index', [
            'students'=>$students,
        ]);
    }

    public  function  create()
    {
        return view('students.create');
    }

    public function store(Request $rq)
    {
//        echo 1;
//        dd($rq->get('first_name'));
        $student = new Student();
        $student->first_name = $rq->get('first_name');
        $student->last_name = $rq->get('last_name');
        $student->gender = $rq->get('gender');
        $student->birthdate =$rq->get('birthdate');

        $student->save();
    }
}
