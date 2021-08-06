<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    //
    public function create(){
        $user = file('../students.txt');
        return view('admin.AddScore',['data' => $user ,'id' => $user]);
    }

    public function update($id){
        $score = file('../score.txt');
        $cbc = $score[$id];
        $scores = explode(',', $cbc);
        return view('admin.EditScore',['id' => $id, 'score' => $scores]);
    }

    public function create_submit(Request $request){
        $name =  $request->name;
        $php = $request->php;
        $java = $request->java;
        $net = $request->net;
        $total = $php + $java + $net;
        $ddg = $name.",".$php.",".$java.",".$net.",".$total;
        file_put_contents('../score.txt',PHP_EOL.$ddg, FILE_APPEND);
        return redirect()->route('dashboard.score.index_a')->with('message','Add Score Successfully');
    }
    public function update_submit(Request $request,$id){
        $vvb = file('../score.txt');
        $name =  $request->name;
        $php = $request->php;
        $java = $request->java;
        $net = $request->net;
        $total = $php + $java + $net;
        $vvb[$id] =$name.",".$php.",".$java.",".$net.",".$total.PHP_EOL;
        file_put_contents('../score.txt',implode("",$vvb));           
        return redirect()->route('dashboard.score.index_a')->with('message','Edit Score Successfully');;
    }
    public function delete_submit(Request $request)
	{
        $vvb = file('../score.txt');
        $checked = $request->input('checked');
        foreach($checked as $key ) 	//deletes all pictures found
         {
            unset($vvb[$key]); // delete index 1 line or more an more
            file_put_contents('../score.txt', implode("", $vvb));
        }
        return redirect()->route('dashboard.score.index_a')->with('message','Delete Score Successfully');;
    }
}
