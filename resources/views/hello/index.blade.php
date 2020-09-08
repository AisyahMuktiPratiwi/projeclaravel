<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ini adalah views</title>
    <style>
            html, body {
                background-color: #0ff;
                color: #ff00ff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-align: center;
            }
  </style>
</head>
<body>
    <h1>Nama Saya adalah : {{ $nama }}</h1>
    <ul>
        @foreach ($pelajaran as $pl)
            <li>{{ $pl }}</li>
        @endforeach
    </ul>

</body>
</html>