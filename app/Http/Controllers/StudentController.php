<?php
namespace App\Http\Controllers;
use App\Models\Employee;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class StudentController extends Controller
{
    //

    public function create(){
        return view('admin.AddStudent');
    }

    public function update($id){
        $user = file('../students.txt');
        $ddf = $user[$id];
        $student = explode(',', $ddf);
        return view('admin.EditStudent',['data' => $student, 'id' => $id]);
    }

    public function create_submit(Request $request){
        $name = $request->name;
        $sex = $request->sex;
        $date = $request->date;
        $address = $request->address;
        $ddd = $name.",".$sex.",".$date.",".$address;
        file_put_contents('../students.txt',PHP_EOL.$ddd, FILE_APPEND);
        return redirect()->route('dashboard.student.index')->with('message','Add Student Successfully');
    }
    public function update_submit(Request $request,$id){
        $students = file('../students.txt');
        $name = $request->name;
        $sex = $request->sex;
        $date = $request->date;
        $address = $request->address;
        $students[$id] =$name.",".$sex.",".$date.",".$address.PHP_EOL;
        file_put_contents('../students.txt',implode("",$students));           
        return redirect()->route('dashboard.student.index')->with('message','Update Student Successfully');
    }
    public function delete_submit(Request $request)
	{
        $students = file('../students.txt');
        $checked = $request->input('checked');
        foreach($checked as $key ) 	
         {
            unset($students[$key]); 
            file_put_contents('../students.txt', implode("", $students));
        }
		return redirect()->route('dashboard.student.index')->with('message','Delete Student Successfully');
    }
}
