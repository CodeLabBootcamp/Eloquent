<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2>Teacher: {{$teacher->name}}</h2>
        @foreach($teacher->students as $student)
        <li>{{$student->full_name}}</li>
        @endforeach
        <form action="/teachers/{{$teacher->id}}/addStudent" method="POST">
            {{csrf_field()}}
            <select name="student_id[]" multiple>
                @foreach($students as $student)
                    <option value="{{$student->id}}">{{$student->full_name}}</option>
                @endforeach
            </select>
            <button type="submit">Toggle Student</button>
        </form>

    </div>
</div>
</body>
</html>