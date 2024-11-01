<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;
use Attribute;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data  = Student::all();

        return view('Student.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $attributes = $request->validated();
        Student::create($attributes);

        return to_route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // $x = 10;
        // dd($x);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Student::findOrFail($id);
        return view('Student.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $attribute = $request->validated();
        $data = Student::findOrFail($id);
        $data->update($attribute);
        return to_route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $patient = Student::findOrFail($id);
        $patient->delete();
        return to_route('student.index');
        
    }
}
