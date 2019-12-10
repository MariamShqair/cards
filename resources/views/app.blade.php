

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>To do list</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- CSS And JavaScript -->
        <style>
        .through{ text-decoration: line-through;
            
        }
        </style>
    </head>

    <body>
        <div class="container">
        @yield('content')
        @yield('todo')
        </div>

       
    </body>
</html>