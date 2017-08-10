@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table-bordered table-responsive">
                <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Full name</th>
                <th>Grade</th>
                <th>Level Name</th>
                </thead>

                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->full_name}}</td>
                        <td>{{$student->grade_string}}</td>
                        <td>{{$student->level->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
    @endsection