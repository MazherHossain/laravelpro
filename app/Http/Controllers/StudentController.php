<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
