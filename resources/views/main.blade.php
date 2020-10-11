<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>main</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Add Your Product</h1>
            <a href="{{ route('product.index')}}" class="btn btn-success">Add Button</a>
            </div>
        </div>
    </body>
</html>
