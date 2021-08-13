<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = student::all();
        return view('student.index',['data' => $users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.AddStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'username' =>['required'],
            'last_name'=>['required'],
            'first_name'=>['required'],
            'email'     => 'required|email|max:256',
        ]);
        if ($validator->fails()) {
            return Redirect()
                    ->back()
                    ->withErrors($validator);
        }else{
            $student=new Student();
            $student->username = $request->input('username');
            $student->last_name = $request->input('last_name');
            $student->first_name = $request->input('first_name');
            $student->email = $request->input('email');
            $student->save();
            return redirect()->route('student.index')->with('message','Add Student Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Student::find($id);
        // $roles = role::all();
        return view('student.EditStudent',  ['data' => $student ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'username' =>['required'],
            'last_name'=>['required'],
            'first_name'=>['required'],
            'email'     => 'required|email|max:256',
        ]);
        if ($validator->fails()) {
            return Redirect()
                    ->back()
                    ->withErrors($validator);
        }else{
            $student= Student::find($id);
            $student->username = $request->input('username');
            $student->last_name = $request->input('last_name');
            $student->first_name = $request->input('first_name');
            $student->email = $request->input('email');
            $student->save();
            return redirect()->route('student.index')->with('message','Edit Student Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $profile = Profile::find($id);
        $profile->delete();
		return redirect()->route('profile.index')->with('message','Delete Student Successfully');
    }
    
}
