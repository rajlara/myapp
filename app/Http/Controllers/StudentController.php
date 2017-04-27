<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentModel;
use Illuminate\Support\Facades\Session;
use Meta;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Meta::set('title', 'Students View');

        $students = StudentModel::all();

        return view('student.index', [
            'students' => $students,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Meta::set('title', 'Students Create');

        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $data = $request->all();

        if (StudentModel::create($data)) {
            Session::flash('success', 'Student has been created successfully!');
        } else {
            Session::flash('error', 'Something went worng please try again');
        }

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Meta::set('title','Student Edit');
        $student = StudentModel::find($id);

        return view('student.edit', [
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $student = StudentModel::find($id);
        if ($student) {
            $data = $request->all();
            if ($student->update($data)) {
                Session::flash('success', 'Student updated successfully!');
            } else {
                Session::flash('error', 'Something went wrong');
            }

            return redirect()->route('student.index');
        } else {
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = StudentModel::find($id);

        if ($student->delete()) {
            Session::flash('success', 'Steudent has been deleted successfully');
        } else {
            Session::flash('error', 'Something went wrong');
        }

        return redirect()->route('student.index');
    }
}
