<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
