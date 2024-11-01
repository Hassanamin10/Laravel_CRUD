<?php

namespace App\Http\Controllers;

use App\Http\Requests\Teacher\CourseStoreRequest;
use App\Models\Course;
use App\Http\Requests\Teacher\StoreRequest;
use App\Http\Requests\Teacher\UpdateRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data  = Teacher::all();
        return view('Teacher.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $attributes = $request->validated();
        $teacher = Teacher::create($attributes);
        return to_route('addcourse',['id' => $teacher->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Teacher::findOrFail($id);
        return view('Teacher.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        //
        $user = Teacher::findOrFail($id);
        $attributes  = $request->validated();
        $user->update($attributes);
        return to_route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // $user = Teacher::findOrFail($id);
        // $user->delete();
        
        Teacher::destroy($id);
        return to_route('teacher.index');
    }


    // Get Course Page
    public function getAddCourse(string $id){
        Teacher::findOrFail($id);
        return view('Teacher.add_course',compact('id'));
    }


    // Store Course for Teacher
    public function addCourse(CourseStoreRequest $request,string $id){
        
        $request->validated();
        Course::create([
            'name' => $request->name,
            'teacher_id' => $id
        ]);
        return to_route('teacher.index');
    }

}
