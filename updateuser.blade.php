<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Update Users Information</h1>
                <form action="{{ route('update.data',$data->id) }}" method="POST">
                    @csrf
                     <div class="mb-3">
                      <label for="form-label" style="font-size: 20px; font-weight:500;">Name</label>
                      <input type="text" value="{{ $data->name }}" class="form-control" name="username" style="border: none;
                        background-color: #e6e3e3;
                      border-radius: 5px;" required>
                     </div>
                     <div class="mb-3">
                      <label for="form-label" style="font-size: 20px; font-weight:500;">Email</label>
                      <input type="email" value="{{ $data->email }}" class="form-control" name="useremail"  style="border: none; background-color: #e6e3e3; border-radius: 5px;" required>
                     </div>
                     <div class="mb-3">
                      <label for="form-label" style="font-size: 20px; font-weight:500;">Age</label>
                      <input type="number" value="{{ $data->age }}" class="form-control" name="userage"  style="border: none; background-color: #e6e3e3; border-radius: 5px;" required>
                     </div>
                     
                     <a href=""><button  type="submit" class="btn btn-success mb-3 " style="width: 28%; font-weight:600;">Update Data</button></a>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>