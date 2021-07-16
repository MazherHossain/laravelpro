<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * load all students**/
    public function index(){
        return view ('student.index');
    }
    /**
     * create a bew student data**/
    public function create(){
        return view ('student.create');
    }
    /**
     * storing student data**/
    public function store(Request $request){
        Student::create([
            'name' => $request->name,//'database column name' => $request-> 'form input name'
            'email'=> $request->email,
            'cell'=> $request->cell,
            'uname'=>$request->username
        ]);
        return back();
    }
    /**
     * edit student data**/
    public function edit(){
        return view ('student.edit');
    }
    /**
     * edit student data**/
    public function show(){
        return view ('student.show');
    }
}
