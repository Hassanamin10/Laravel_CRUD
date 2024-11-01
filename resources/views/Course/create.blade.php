@extends('layouts.app')

@section('title') Course @endsection
@section('header') Create a new Course @endsection
@section('action') Create @endsection
@section('st_course') active @endsection

@section('fNavLink') {{ url('course') }} @endsection
@section('fNav') Course Page @endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Create New Course</h3>
    </div>
    <div class="card-body">
        <form action="{{route('course.store')}}" method="post">
            @csrf

        <!-- Name -->
        <div class="form-group">
            <label>Name</label>
            <div class="input-group" id="reservationdate" data-target-input="nearest">
                <input type="text" name="name" class="form-control"/>
                    <div class="input-group-text"><i class="fa-solid fa-font"></i></div>
            </div>
            @error('name')
                <span class="fs-6 text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <!-- Choose Teacher -->
        <div class="form-group">
            <label>Choose Teacher</label>
    
            <div class="input-group">
            <select name="teacher_id" class="form-control">
                <option disabled selected>Select</option>
                @foreach ($teachers as $teacher )
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
            </div>
            @error('teacher_id')
                <span class="fs-6 text-danger"> {{ $message }} </span>
            @enderror
        </div>
        <!-- /.form group -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

@endsection