@extends('layouts.master')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="jumbotron">
                    <form action="/students/add" method="POST">
                        {{csrf_field()}}
                            <input name="first_name" type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1">
                            <input name="last_name" type="text" class="form-control" placeholder="Grade" aria-describedby="basic-addon1">
                            <input name="grade" type="text" class="form-control" placeholder="Grade" aria-describedby="basic-addon1">
                            <button type="submit">Add</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection