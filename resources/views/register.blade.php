<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registracijska forma</h1>
    <hr>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <label>Ime</label>
        <input type="text" name="name" required>
        <br><br>
        <label>Email</label>
        <input type="email" name="email" required>
        <br><br>
        <label>Lozinka</label>
        <input type="password" name="password" required>
        <br><br>
        <label>Ponovljena lozinka</label>
        <input type="password" name="password_confirmation" required>
        <br><br><br>
        <button type="submit">Registriraj se</button>
    </form>

    @if (session("success"))
        <p>{{session("success")}}</p>
    @endif

</body>
</html>
