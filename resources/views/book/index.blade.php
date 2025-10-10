<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
    @include("navbar")
</head>
<body>
    <form action="{{route("books.store")}}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Ingrese nombre">
        <input type="text" name="price" id="" placeholder="Ingrese precio">
        <button type="submit">Guardar</button>
    </form>

    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Precio</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->price}}</td>
                    <td><a href="{{route("books.edit", $book->id)}}">Edit</a></td>
                    <td>
                    <form action="{{route("books.destroy", $book->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Eliminar</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>