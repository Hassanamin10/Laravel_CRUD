@extends('layouts.app')

@section('title') Teacher @endsection
@section('header') Add your Course @endsection
@section('action') Add Course @endsection
@section('st_teacher') active @endsection

@section('fNavLink') {{ url('teacher') }} @endsection
@section('fNav') Teacher Page @endsection


@section('content')

<div class="card card-primary">

    <div class="card-header">
    <h3 class="card-title">Add Course</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('addcourse', $id) }}" method="post">
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

        {{-- Buttons --}}
        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Add Course</button>
            </div>
            <div class="col-md-6">
                <a href="{{ url('teacher') }}" class="btn btn-danger" >Skip</a>
            </div>
        </div>
        </form>
    </div>
</div>

@endsection