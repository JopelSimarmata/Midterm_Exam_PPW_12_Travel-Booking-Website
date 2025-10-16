<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Perjalanan</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    @include('navbar')
    <div class="main-container">
        <h1>Form Booking Perjalanan</h1>
        @if(session('success'))
            <div class="alert alert-success"><b>{{ session('success') }}</b></div>
        @endif
        <hr>
        <table>
            <tr>
                <td valign="top" width="50%">
                    <h2>Form Booking</h2>
                    <form method="POST" action="/booking">
                        @csrf
                        <table>
                            <tr>
                                <td>Nama Lengkap:</td>
                                <td><input type="text" name="nama" size="30" required></td>
                            </tr>
                            <tr>
                                <td>Tujuan:</td>
                                <td>
                                    <select name="destinasi_id" required>
                                        @foreach($destinasi as $item)
                                            <option value="{{ $item->id }}" {{ $destinasi_id == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Berangkat:</td>
                                <td><input type="date" name="tanggal" required></td>
                            </tr>
                            <tr>
                                <td>Jumlah Penumpang:</td>
                                <td><input type="number" name="jumlah" min="1" value="{{ $jumlah }}" required></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">Booking Sekarang</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
                
                <td valign="top" width="50%">
                    <h2>Daftar Harga Destinasi</h2>
                    <table border="1" cellpadding="5" cellspacing="0" width="100%">
                        <tr bgcolor="#cccccc">
                            <th>Nama Destinasi</th>
                            <th>Harga per Orang</th>
                            <th>Maskapai</th>
                        </tr>
                        @if(count($destinasi) === 0)
                            <tr><td colspan="3" align="center">Belum ada data destinasi</td></tr>
                        @else
                            @foreach($destinasi as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td>{{ $item->maskapai }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
   



