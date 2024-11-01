@extends('layouts.app')

@section('title') Student Page @endsection
@section('header') Student @endsection
@section('action') Edit @endsection
@section('st_student') active @endsection

@section('fNavLink') {{ url('student') }} @endsection
@section('fNav') Student Page @endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Edit Student</h3>
    </div>
    <div class="card-body">
    <form action="{{route('student.update',$data->id)}}" method="post">
        @csrf
        @method('PUT')
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
    <!-- Date and time -->
    <div class="form-group">
        <label>Email</label>
        <div class="input-group" id="reservationdate" data-target-input="nearest">
            <input type="email" name="email" class="form-control" value="{{ $data->email }}"/>
                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
        </div>
        @error('email')
            <span class="fs-6 text-danger"> {{ $message }} </span>
        @enderror
    </div>
    <!-- /.form group -->
<!-- phone mask -->
<div class="form-group">
    <label>Phone Number</label>

    <div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-phone"></i></span>
    </div>
    <input type="text" name ='phone' value="{{ $data->phone }}" class="form-control" data-inputmask='"mask": "(999) 999-999-99"' data-mask inputmode="text">
    </div>
    <!-- /.input group -->
    @error('phone')
            <span class="fs-6 text-danger"> {{ $message }} </span>
        @enderror
</div>
<!-- /.form group -->


    <!-- Gender -->
    <div class="form-group">
        <label>Gender</label>

        <div class="input-group">
        <select name="gender" class="form-control" >
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