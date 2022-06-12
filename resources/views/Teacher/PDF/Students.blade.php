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
        <h2>Students Detail</h2>
        <table style="border-collapse:collapse; border: 1px solid black;">
            <tr>
                <th class="content-width">Sr. No</th>
                <th class="content-width">Id</th>
                <th class="content-width">Name</th>
                <th class="content-width">Email</th>
                <th class="content-width">Registered at</th>
            </tr>
            @forelse($users as $key=>$user)
            <tr>
                <td class="content-width">{{$key+1}}</td>
                <td class="content-width">{{$user->id}}</td>
                <td class="content-width">{{$user->name}}</td>
                <td class="content-width">{{$user->email}}</td>
                <td class="content-width">{{$user->created_at}}</td>
            </tr>
            @empty
                <h2>No Data Found</h2>
            @endforelse
        </table>
    </div>
</body>
</html>