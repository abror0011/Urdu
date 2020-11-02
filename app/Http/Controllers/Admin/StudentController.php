<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
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
        $students = Student::latest()->get();
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
            'name' => $request->post('user_name'),
            'email' => $request->post('email'),
            'password' => bcrypt($request->post('password'))
        ];
        $user=User::create($user_data);
           
        $student_data = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'course' => $data['course'],
            'group' =>  $data['group'],
            'address' => $data['address'],
            
        ];
        $user->student()->create($student_data);
        return redirect()->route('admin.students.index')->with('success', 'Yaratildi!');

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

        $request->validate([
            'user_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'course' => 'required',
            'group' => 'required',
            'address' => 'required',
            'user_name' => 'required',
            'password' => 'required'
        ]);
        $student->update($request->post());
        return redirect()->route('admin.students.index')->with('success','Yangiladi!');
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
        $delete->delete();
        return redirect()->route('admin.students.index')->with('delete','O`chirildi!');
    }
}
