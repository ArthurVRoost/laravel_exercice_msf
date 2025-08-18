<!DOCTYPE html>
<html>
<head>
    <title>Gestion École</title>
</head>
<body>
    <nav>
        <a href="/batiments">Bâtiments</a> |
        <a href="/formations">Formations</a> |
        <a href="/type_informations">Types de Formations</a> |
        <a href="/eleves">Élèves</a>
    </nav>
    <hr>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>