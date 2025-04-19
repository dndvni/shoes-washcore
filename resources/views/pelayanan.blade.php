<!DOCTYPE html>
<html>
    <head>
        <title>Jenis Pelayanan</title>
    </head>
    <body>
        <h1>Jenis Pelayanan</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Jenis Pelayanan</th>
                <th>Harga Pelayanan</th>
            </tr>
            @foreach($data as $d)
                <tr>
                    <td>{{ $d->pelayanan_id }}</td>
                    <td>{{ $d->jenis_pelayanan }}</td>
                    <td>{{ $d->harga_pelayanan }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
