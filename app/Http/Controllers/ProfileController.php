<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        $profile = Profile::all();
        $student  = Student::all();
        return view('profile.index',['student' => $student, 'profile' => $profile]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = Student::all();
        return view('profile.create', ['data' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $student = new Profile();
            $student->address          = $request->input('address');
            $student->gender           = $request->input('gender');
            $student->age              = $request->input('age');
            $student->date_of_birth    = date('Y-m-d H:i:s' , strtotime($request->date_of_birth));
            $student->university       = $request->input('university');
            $student->year             = $request->input('year');
            $student->phone            = $request->input('phone');
            $student->skills           = $request->input('skills');
            $student->student_id       = $request->input('username');
            $student->save();
            return redirect()->route('profile.index')->with('message','Add Profile Successfully');
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
        $profile = Profile::find($id);
        return view('profile.edit',  ['profile' => $profile]);
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
        $student = Profile::find($id);
            $student->address          = $request->input('address');
            $student->gender           = $request->input('gender');
            $student->age              = $request->input('age');
            $student->date_of_birth    = date('Y-m-d H:i:s' , strtotime($request->date_of_birth));
            $student->university       = $request->input('university');
            $student->year             = $request->input('year');
            $student->phone            = $request->input('phone');
            $student->skills           = $request->input('skills');
            $student->save();
            return redirect()->route('profile.index')->with('message','Update Profile Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //

		return redirect()->route('student.index')->with('message','Delete Profile Successfully');
    }
    
}
