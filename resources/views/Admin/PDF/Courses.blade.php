<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .content-width
        {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Courses Detail</h2>
        <table style="border-collapse:collapse; border: 1px solid black;">
            <tr>
                <th class="content-width">Sr. No</th>
                <th class="content-width">Id</th>
                <th class="content-width">Course Title</th>
                <th class="content-width">Teacher Name</th>
                <th class="content-width">Registered at</th>
            </tr>
            @forelse($courses as $key=>$course)
            <tr>
                <td class="content-width">{{$key+1}}</td>
                <td class="content-width">{{$course->id}}</td>
                <td class="content-width">{{$course->course_title}}</td>
                <td class="content-width">{{$course->teacher_name}}</td>
                <td class="content-width">{{$course->created_at}}</td>
            </tr>
            @empty
                <h2>No Data Found</h2>
            @endforelse
        </table>
    </div>
</body>
</html>
</body>
</html>