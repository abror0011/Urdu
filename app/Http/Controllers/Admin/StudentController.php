<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\PasswordRequest;

use App\Models\Student;
use App\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students = Student::latest()->paginate(10);
        // dd($students);
        return view('admin.students.index',compact('students')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $data = $request;
        $user_data = [
            'phone' => $request->post('user_name'),
            'password' => bcrypt($request->post('password'))
        ];
        $user = User::create($user_data);
           
        $student_data = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'course' => $data['course'],
            'group' =>  $data['group'],
            'address' => $data['address'],
            
        ];
        $user->student()->create($student_data);
        return redirect()->route('admin.students.index')->with('success','Yaratildi!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        
        return view('admin.students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.edit',compact('student'));
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
        $student = Student::findOrFail($id);
        $data = $request;
        $request->validate([
            // 'user_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'course' => 'required',
            'group' => 'required',
            'address' => 'required',
            'user_name' => 'required',
            // 'password' => 'required'
            ]);
        $user_data = [
            'phone' => $request->post('user_name'),
        ];
        $student->user->update($user_data);
        $student_data = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'course' => $data['course'],
            'group' =>  $data['group'],
            'address' => $data['address'],
            
        ];    
        $student->update($student_data);

        return redirect()->route('admin.students.index')->with('success','Yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Student::findOrFail($id);
        $delete->user->delete();
        return redirect()->route('admin.students.index')->with('delete','O`chirildi!');
    }

    public function password(PasswordRequest $request,$id)
    {
        $password = Student::findOrFail($id);
        $data = [
            'password' => bcrypt($request->post('password')),
        ];
        $password->user->update($data);
        return redirect()->route('admin.students.index')->with('success','Yangilandi');
    }

    
}
