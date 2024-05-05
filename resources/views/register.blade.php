<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('register.add') }}" method="POST">
        @csrf

        <div>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <input type="email" name = "email" placeholder="email">
        </div>
        <div>
            <input type="text" name = "password" placeholder="password">
        </div>
        <button type="submit"> Submit </button>

        @if (session('success'))
            <div class = "alert alert-success">
                <li>{{ session('success') }}</li>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        
    </form>

</body>

</html>
