<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Barang</title>
</head>
<body>
    <h1>Barang</h1>
    @if (session('success'))
        <p>{{session('success')}}</p>
    @endif

    <a href="{{route('items.create')}}">Tambahkan Barang</a>
    <table border="1">
        <tr>
            <td>No.</td>
            <td>Nama Barang</td>
            <td>Jumlah</td>
            <td>Deskripsi</td>
        </tr>
        @foreach ($items as $item)
        <tr>
            <form action="{{ route('items.destroy', $item)}}" method="POST" style="display:inline">
                @csrf
                <td>{{$item->id}} </td>
                <td>{{$item->Nama_Barang}} </td>
                <td>{{$item ->Jumlah}}</td>
                <td>{{$item ->Deskripsi}}</td>
                <td><a href="{{ route('items.edit', $item)}}">Edit</a></td>
               <td> @method('DELETE') <button type="submit">Delete</button></td>
            </form>
            @endforeach
        </tr>
    </table>
    <ul>
    </ul>
</body>
</html>