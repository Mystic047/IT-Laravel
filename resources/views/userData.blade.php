<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <form action="{{ route('register.show') }}">
            <button class="btn btn-primary">
                ADD
            </button>
        </form>
        <table class="table table-bordered">
            <thead class="table-sm">
                <tr>
                    <th scope="col" class="col-2">id</th>
                    <th scope="col" class="col-3">name</th>
                    <th scope="col" class="col-3">email</th>
                    <th scope="col" class="col-5">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>


                            <td>
                                <form action="{{ route('user.editform', $user->id) }}" method="GET" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                </form>
                            
                                <form action="{{ route('user.delete', $user->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                
                    </tr>
                @endforeach
            </tbody>

        </table>
        @if (session('success'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>



</body>

</html>
