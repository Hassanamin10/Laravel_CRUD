@extends('layouts.app')

@section('title') Course Page @endsection
@section('header') Course @endsection
@section('action') Edit @endsection
@section('st_teacher') active @endsection

@section('fNavLink') {{ url('Course') }} @endsection
@section('fNav') Course Page @endsection
@section('secNavLink') course/create @endsection
@section('secNav') Create Course @endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Edit Course</h3>
    </div>
    <div class="card-body">
    <form action="{{route('course.update',$data->id)}}" method="post">
        @csrf
        @method('PUT')
        {{-- Name --}}
        <div class="form-group">
            <label>Name</label>
            <div class="input-group" id="reservationdate" data-target-input="nearest">
                <input type="text" name="name" class="form-control" value="{{ $data->name }}"/>
                    <div class="input-group-text"><i class="fa-solid fa-font"></i></div>
            </div>
            @error('name')
                <span class="fs-6 text-danger"> {{ $message }} </span>
            @enderror
        </div>
        {{-- Name --}}

        <!-- Choose Teacher -->
        <div class="form-group">
            <label>Choose Teacher</label>
    
            <div class="input-group">
            <select name="teacher_id" class="form-control" >
                <option disabled selected>Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            </div>
        </div>
        <!-- /.form group -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

@endsection