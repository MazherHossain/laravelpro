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
        $this -> validate($request,[
            'name'=> ['required'],
            'email'=> ['required','unique:students', 'email'],
            'cell'=> ['required','numeric', 'starts_with:01,+8801'],
            'uname'=> ['min:5','max:15']
        ],[
            'name.required'=> "Name can not have numeric value.",
        ]); 
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
    public function edit($id){
        $data=Student::find($id);
        return view ('student.edit',[
            'edit_data'=> $data
        ]);
    }
    /**
     * update student data**/
    public function update(Request $request,$id){
        $update_data=Student::find($id);
        $update_data -> name = $request -> name;
        $update_data -> email = $request -> email;
        $update_data -> cell = $request -> cell;
        $update_data -> uname = $request -> uname;
        $update_data -> update();
        return back()-> with('success','Student data edited!');
    }
    /**
     * edit student data**/
    public function show($id){
        $data=Student::find($id);
        return view ('student.show',[
            'user_data' => $data
        ]);
    }
    /**
     * delete student data**/
    public function destroy($id){
        $delete_data= Student::find($id);
        $delete_data->delete();
        return back()-> with('success','Student data deleted!');
    }
}
