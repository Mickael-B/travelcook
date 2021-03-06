	<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Cook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
 
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Contact</a>
        </div>
        <div class="nav navbar-nav navbar-right">
            <li><a href="{{route('home')}}">Accueil</a></li>
            <li><a href="{{url('contacts.index')}}">Contacts</a></li>
        </div>
    </div>
</nav>
 
<main>
    <div class="container">
        @yield('content')
    </div>
</main>
 
</body>
</html>
