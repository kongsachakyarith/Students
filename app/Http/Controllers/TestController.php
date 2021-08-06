<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(){
        $users = file('../students.txt');
        return view('admin.students',['data' => $users]);
    }

    public function index_a(){
        $score = file('../score.txt');
        $users = file('../students.txt');
        return view('admin.score',['data' => $users, 'score' => $score]);
    }


}
