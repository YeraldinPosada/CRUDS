<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h3>Edit Libro</h3>
    <form action="{{route('books.update', $book->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" value="{{$book->name}}" name="name" id="" placeholder="Ingrese su nombre">
        <input type="text" value="{{$book->price}}"  name="price" id="" placeholder="Ingrese su precio">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>