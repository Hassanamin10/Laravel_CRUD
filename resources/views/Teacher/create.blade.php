@extends('layouts.app')

@section('title') Teacher @endsection
@section('header') Create a new Teacher @endsection
@section('action') Create @endsection
@section('st_teacher') active @endsection

@section('fNavLink') {{ url('teacher') }} @endsection
@section('fNav') Teacher Page @endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Create Teacher</h3>
    </div>
    <div class="card-body">
        <form action="{{route('teacher.store')}}" method="post">
            @csrf

        <!-- Name -->
        <div class="form-group">
            <label>Name</label>
            <div class="input-group">
                <input type="text" name="name" class="form-control"/>
                    <div class="input-group-text"><i class="fa-solid fa-font"></i></div>
            </div>
            @error('name')
                <span class="fs-6 text-danger"> {{ $message }} </span>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group">
            <label>Email</label>
            <div class="input-group" >
                <input type="email" name="email" class="form-control"/>
                    <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
            </div>
            @error('email')
                <span class="fs-6 text-danger"> {{ $message }} </span>
            @enderror
        </div>
        <!-- /.form group -->

    <!-- Date -->
    <div class="form-group">
        <label>Date of birth:</label>
        <div class="input-group " >
            <input type="date" name="date_of_birth" class="form-control " />
            <div class="input-group-append" >
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        @error('date')
        <span class="fs-6 text-danger"> {{ $message }} </span>
        @enderror
    </div>

    <!-- phone mask -->
    <div class="form-group">
        <label>Phone Number</label>
    
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="text" name ='phone' class="form-control" data-inputmask='"mask": "(999) 999-999-99"' data-mask inputmode="text">
        </div>
        @error('phone')
                <span class="fs-6 text-danger"> {{ $message }} </span>
            @enderror
    </div>
    <!-- /.form group -->
    
    
        <!-- Gender -->
        <div class="form-group">
            <label>Gender</label>
    
            <div class="input-group">
            <select name="gender" class="form-control">
                <option disabled selected>Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>
            @error('gender')
                <span class="fs-6 text-danger"> {{ $message }} </span>
            @enderror
        </div>
        <!-- /.form group -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
@endsection