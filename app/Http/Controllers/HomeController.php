<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{
    public function Index(){
        $title = 'Home Page';
        $students = [
            ["name" => "Kisan Kumar", "age" => 25, "course" => "BCA", "session" => "2020-23", "status" => 0],
            ["name" => "Sompurna Kumari", "age" => 25, "course" => "MCA", "session" => "2020-23", "status" => 1],
            ["name" => "Kisan Kumar", "age" => 25, "course" => "BCA", "session" => "2020-23", "status" => 0]
        ];
        return view('index', compact('title', 'students'));
    }

    public function About(){
        return view('about');
    }

    public function Create(){
        $title = 'Create';
        return view('create', compact('title'));
    }

    public function Student(Request $req){
        $student = new Student();
        $student->name = $req->name;
        $student->mobile = $req->mobile;
        $student->email = $req->email;
        $student->fname = $req->fname;
        $student->class = $req->class;
        $student->status = 0;
        $student->save();
        return redirect('create')->with('message', "Data Inserted");
    }

    public function View(){
        $students = Student::all(); // get all data from the database
        $title = 'View Page';
        return view('view',compact('title', 'students'));
    }

    public function deleteData($id){
        $data = Student::find($id);
        $students = Student::all();
        $title = 'View Page';
        $data->delete();
        return view('view', compact('students', 'title'));
    }
}
