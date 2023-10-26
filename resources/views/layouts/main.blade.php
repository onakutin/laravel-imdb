<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Better movie DB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        @include('common/topnav', ['current_page' => $current_page])
        
    </header>
    
    
    @yield('content')
    
    
    <footer>
        @include('common/footer')
    </footer>
</body>
</html>