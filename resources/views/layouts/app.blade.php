<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo APP</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    <div class="container mt-2">
    @include('inc.messages')
    @yield('content')        
    
    </div>

    <footer id="footer">
        <p class="text-center mt-2">Copyright &copy; 2018 Todolist</p>
    </footer>
</body>
</html>