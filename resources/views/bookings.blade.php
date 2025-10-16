<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Booking</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    @include('navbar')
    <div class="main-container">
        <h1>Semua Daftar Booking Penerbangan</h1>
        <hr>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Maskapai</th>
                <th>Tanggal Berangkat</th>
                <th>Jumlah Penumpang</th>
                <th>Total Harga</th>
            </tr>
            @if(count($bookings) === 0)
                <tr><td colspan="6" align="center">Belum ada booking</td></tr>
            @else
                @foreach($bookings as $index => $booking)
                    <tr>
                        <td align="center">{{ $index + 1 }}</td>
                        <td>{{ $booking['nama'] }}</td>
                        <td align="center">{{ $booking->destinasi->maskapai ?? '-' }}</td>
                        <td align="center">{{ date('d/m/Y', strtotime($booking['tanggal'])) }}</td>
                        <td align="center">{{ $booking['jumlah'] }} orang</td>
                        <td align="right"><b>Rp{{ number_format($booking['total'], 0, ',', '.') }}</b></td>
                    </tr>
                @endforeach
            @endif
        </table>
        <p><a href="/booking">Kembali ke Form Booking</a></p>
    </div>
</body>
</html>
 