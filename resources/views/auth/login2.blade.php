<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" placeholder="email"  name="email"><br>
        @error('email')
        <h4>{{ $message }} </h4>
        @enderror
        <input type="password" placeholder="password"  name="password"><br>
        @error('password')
         <h4>{{ $message }} </h4>
        @enderror
        <input type="submit">


    </form>

</body>
</html>
