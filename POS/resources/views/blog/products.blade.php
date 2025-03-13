<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-with, initial-scale=1.0">
        <title>Daftar Kategori Produk</title>
        <link rel="stylesheet" href="{{asset(path:'css/products.css') }}">
    </head>
    <body>
        <h1>daftar Kategori Produk</h1>
        <div class="categories">
            @foreach ($categories as $category)
            <div class="category-card">
                <h2><a href="{{$category['route']}}">{{"$category['name']"}}</a></h2>
            </div>
            @endforeach
        </div>
    </body>
</html>