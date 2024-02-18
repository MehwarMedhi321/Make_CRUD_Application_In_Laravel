<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    nav.w-5{
        display: none;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 m-4">
                <h1  style="margin-left: 30% ">All Users Data lists</h1>
                <a href="/newuser" style="margin: 15px" class="btn btn-success btn-sm">  Add Users  </a>
                <table class="table table-border table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>View</th>
                        <th>Delete Data</th>
                        <th>Update Data</th>
                    </tr>
                    @foreach ($data as $id =>$user)
                    <tr>
                        <td> {{ $user->id }} </td>
                        <td> {{ $user->name }} </td>
                        <td>  {{ $user->email }}  </td>
                        <td> {{ $user->age }} </td>
                        <td><a href="{{ route('view.user', $user->id) }}" class="btn btn-primary btn-sm">SHOW</a> </td>
                        <td><a href="{{ route('delete.user', $user->id) }}" class="btn btn-danger btn-sm">Delete</a> </td>
                        <td><a href="{{ route('update.page', $user->id) }}" class="btn btn-warning btn-sm">Update</a> </td>
                    </tr>
                    @endforeach
                </table>
                <div class="mt-5">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>


</body>
</html>


