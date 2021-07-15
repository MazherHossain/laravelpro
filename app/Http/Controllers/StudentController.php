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
     * load all students**/
    public function create(){
        return view ('student.create');
    }
    /**
     * load all students**/
    public function edit(){
        return view ('student.edit');
    }
}
