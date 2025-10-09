<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Authors</h3>
    <form action="{{route('authors.store')}}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Ingrese su nombre">
        <input type="text" name="nationality" id="" placeholder="Ingrese su nacionalidad">
        <button type="submit">Guardar</button>
    </form>

    <table>
        <th>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Nationality</td>
            </tr>
        </th>
        <tbody>
            @foreach ($authors as $author)
                
            
            <tr>
                <td>
                    {{$author->id}}
                </td>
                <td>
                    {{$author->name}}
                </td>
                <td>
                    {{$author->nationality}}
                </td>
                <td>
                    <a href="{{route('authors.edit', $author->id)}}">Editarpi</a>
                </td>
                <td>
                    
                    <form action="{{route('authors.destroy', $author->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Borranding</button>

                    </form>
                </td>
            </tr>


            @endforeach
        </tbody>
    </table>
</body>
</html>