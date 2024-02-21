<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/kamun.png" type="image">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
    @include('partial.navbar')
    <div class="container-fluid">
        @yield('container')
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscript.js"></script>
</body>
</html>