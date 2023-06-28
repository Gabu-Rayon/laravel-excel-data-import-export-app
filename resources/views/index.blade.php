<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Excel Data Import and Export demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <div class="card bg-light mt-3">
                <div class="card-header">
                    Laravel Import Excel Data
                </div>
                <div class="card-body">
                    <div class="col-md-5">
                        <form action="{{ route('user.import') }}" method="POST" entype="multipart/form-data">
                            @csrf
                            <input type="file" class="form-control" name="file">
                            <span><br></span>
                            <button type="submit" cl class="btn btn-primary">Import A file</button>
                        </form>
                    </div>
                    <hr >
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th> ID</th>
                                <th> Name</th>
                                <th>Email</th>

                            </tr>
                        </thead>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
