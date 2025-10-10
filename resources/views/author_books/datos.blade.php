<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include("navbar")
</head>
<body>
    <div>
        <form action="{{route('author_books.store')}}" method="post">
            @csrf
            <select name="author_id" id="">
            @foreach ($authors as $author)
                <option value="{{$author->id}}">
                    {{$author->name}}
                </option>
            @endforeach
            </select>
            <select name="book_id" id="">
                @foreach ($books as $book)
                    <option value="{{$book->id}}">
                        {{$book->name}}
                    </option>
                @endforeach
            </select>
            <button type="submit">Guardar</button>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Libro</th>
                <th>Nombre Author</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($author_books as $author_book)
                    <td>{{$author_book->id}}</td>
                    <td>{{$author_book->author->name}}</td>
                    <td>{{$author_book->book->name}}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</body>
</html>