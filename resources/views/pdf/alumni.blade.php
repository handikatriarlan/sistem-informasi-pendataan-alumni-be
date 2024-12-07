<!DOCTYPE html>
<html>

<head>
    <title>Data Alumni</title>
</head>

<body>
    <h1>Data Alumni</h1>
    <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Tahun Lulus</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->email }}</td>
                    <td>{{ $record->tahun_lulus }}</td>
                    <td>{{ $record->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
