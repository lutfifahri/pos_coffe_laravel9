<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Testimoni</title>
</head>
<body>
    <h1>Data Testimoni</h1>
    <table cellpadding="5" border="1">
            <thead>
            <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Tanggal</th>
                    <th>Isi Pesan</th>
                </tr>
            </thead>
            <tbody>
                @php $no= 1; @endphp
                @foreach($testimoni as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->users->name }}</td>
                    <td>{{ $row->date }}</td>
                    <td>{{ $row->pesan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>