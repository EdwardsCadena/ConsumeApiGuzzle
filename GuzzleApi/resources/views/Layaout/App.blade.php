<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{!! $titulo !!}</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.6/dist/semantic.min.css">
    <link rel="stylesheet" href="css/app.css">
    <script type = "text / javascript" src = "https://www.gstatic.com/charts/loader.js" > </script>
    <script type = "text / javascript" > google . gráficos . load ( 'current' , { packages : [ 'corechart' ]}); google . gráficos . setOnLoadCallback ( drawChart ); ... </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
</head>
<body>
    
    <div class="ui container">
    <br> 
        @yield('content')   

    </div>


</body>
</html>