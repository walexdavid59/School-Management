<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Student::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname'  =>  'required|string|max:191',
            'email'     =>  'required|string|email|max:191|unique:students',
            'password'  =>  'required|string|min:6'
        ]);

        return Student::create([
            'fullname' => $request['fullname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'dob' => $request['dob'],
            'gender' => $request['gender'],
            'details' => $request['details'],
            'admnumber' => $request['admnumber'],
            'stype' => $request['stype'],
            'father' => $request['father'],
            'fphone' => $request['fphone'],
            'mother' => $request['mphone'],
            'mphone' => $request['mphone'],
            'occupation' => $request['occupation'],
            'address' => $request['address'],
            'admDate' => $request['dateadm'],
            'classAdm' => $request['classadm'],
            'photo' => $request['imgupload'],
            'status' => '1',
            'userid' => auth()->id()
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}