<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
</head>
<body>
    <h1>Data Pembayaran</h1>
    <table cellpadding="5" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Metode Pembayaran</th>
                    <th>tanggal</th>
                    <th>Kode Pesanan</th>
                    <th>Status Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @php $no= 1; @endphp
                @foreach($pembayaran as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->users->name }}</td>
                    <td>{{ $row->metodePembayaran }}</td>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->pesanan->kodePesanan }}</td>
                    <td>{{ $row->statusPembayaran }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>