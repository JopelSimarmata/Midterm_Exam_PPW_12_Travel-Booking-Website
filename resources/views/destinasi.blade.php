<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Penerbangan</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    @include('navbar')
    <div class="main-container">
        <h1>Katalog Penerbangan</h1>
        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif
        <hr>
        <h2>Destinasi Penerbangan</h2>
        <table>
            <tr>
                <th>Destinasi</th>
                <th>Harga</th>
                <th>Maskapai</th>
            </tr>
            @foreach($destinasi as $item)
                <tr>
                    <td><b>{{ $item['nama'] }}</b></td>
                    <td><b>Rp{{ number_format($item['harga'], 0, ',', '.') }}</b></td>
                    <td>{{ $item['maskapai'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
</head>
