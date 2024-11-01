@extends('layouts.app')

@section('title') Course Page @endsection
@section('header') Course @endsection
@section('action') index @endsection
@section('st_course') active @endsection

@section('fNavLink') {{ url('Course') }} @endsection
@section('fNav') Course Page @endsection
@section('secNavLink') course/create @endsection
@section('secNav') Create Course @endsection


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
            <th style="width: 41%">Name</th>
            <th style="width: 41%">Teach by</th>
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
                        {{ $value->teacher->name }}
                    </td>
                    <td>
                        <a href="{{ route('course.show',$value->id) }}" class="btn btn-sm btn-outline-info">Info</a>
                        <a href="{{ route('course.edit',$value->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                        {{-- Delete Button --}}
                        <form style="display: inline" action="{{ route('course.destroy',$value->id) }}" method="post">
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
