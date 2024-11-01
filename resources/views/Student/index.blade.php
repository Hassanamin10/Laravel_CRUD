@extends('layouts.app')

@section('title') Student Page @endsection
@section('header') Student @endsection
@section('action') Index @endsection
@section('st_student') active @endsection

@section('fNavLink') student @endsection
@section('secNavLink') student/create @endsection
@section('secNav') Create Student @endsection
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title">...</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th style="width: 18%">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $value)
                <tr>
                    <td>
                        {{ $value->name }}
                    </td>
                    <td>
                        {{ $value->email }}
                    </td>
                    <td>
                        {{ $value->phone }}
                    </td>
                    <td>
                        {{ $value->gender }}
                    </td>
                    <td>
                        <a href="{{ route('student.show',$value->id) }}" class="btn btn-sm btn-outline-info">Info</a>
                        <a href="{{ route('student.edit',$value->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                        {{-- Delete Button --}}
                        <form style="display: inline" action="{{ route('student.destroy',$value->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
    <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
    </ul>
    </div>
</div>
<!-- /.card -->

@endsection