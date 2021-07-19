<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * load all students**/
    public function index(){
        $data=Student::all();
        return view ('student.index',[
            'all_data' => $data
        ]);
    }
    /**
     * create a bew student data**/
    public function create(){
        
        return view ('student.create');
    }
    /**
     * storing student data**/
    public function store(Request $request){
        $unique_name='';
        if($request-> hasFile('photo')){
            $img= $request -> file('photo');
            $unique_name=md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('media/students'), $unique_name);
        }

        Student::create([
            'name' => $request->name,//'database column name' => $request-> 'form input name'
            'email'=> $request->email,
            'cell'=> $request->cell,
            'uname'=>$request->username,
            'photo'=> $unique_name,
        ]);
        return back()-> with('success','Student data added!');
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
    /**
     * delete student data**/
    public function destroy(){
        return view ('student.show');
    }
}
