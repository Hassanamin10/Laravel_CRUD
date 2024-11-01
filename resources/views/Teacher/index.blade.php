@extends('layouts.app')

@section('title') Teacher Page @endsection
@section('header') Teacher @endsection
@section('action') index @endsection
@section('st_teacher') active @endsection

@section('fNavLink') {{ url('teacher') }} @endsection
@section('fNav') Teacher Page @endsection
@section('secNavLink') teacher/create @endsection
@section('secNav') Create Teacher @endsection

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
            <th>Age</th>
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
                        {{-- Age --}}
                        {{ \Carbon\Carbon::parse($value->date_of_birth)->age }}
                    </td>
                    <td>
                        {{ $value->phone }}
                    </td>
                    <td>
                        {{ $value->gender }}
                    </td>
                    <td>
                        <a href="{{ route('teacher.show',$value->id) }}" class="btn btn-sm btn-outline-info">Info</a>
                        <a href="{{ route('teacher.edit',$value->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                        {{-- Delete Button --}}
                        <form style="display: inline" action="{{ route('teacher.destroy',$value->id) }}" method="post">
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