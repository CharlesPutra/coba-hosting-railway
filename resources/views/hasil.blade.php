<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                @foreach ($datas as $index => $data)
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->nama }}</td>
                    <td><a href="{{ route('tambah.edit', $data->id) }}">edit</a></td>
                    <td>
                        <form action="{{ route('tambah.destroy', $data->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                @endforeach
            </tr>

        </tbody>
    </table>
</body>

</html>
