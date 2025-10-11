<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editando libros</h1>
    <form action="{{route("author_books.update", $author_book->id)}}" method="post">
        @method("PUT")
        @csrf
        <select name="author_id" id="">
            @foreach ($authors as $author)
                <option value="{{$author->id}}" {{$author->id==$author_book->author_id ? 'selected' : ''}}>{{$author->name}}</option>
            @endforeach
        </select>
        <select name="book_id" id="">
            @foreach ($books as $book)
                <option value="{{$book->id}}" {{$book->id == $author_book->book_id ? 'selected' : ''}}>{{$book->name}}</option>
            @endforeach
        </select>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>