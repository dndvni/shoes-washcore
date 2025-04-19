<!DOCTYPE html>
<html>
    <head>
        <title>Data Pegawai</title>
    </head>
    <body>
        <h1>Data Pegawai</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Nama Pegawai</th>
                <th>Username</th>
                <th>Email</th>
                <th>No HP</th>
            </tr>
            @foreach($data as $d)
                <tr>
                    <td>{{ $d->pegawai_id }}</td>
                    <td>{{ $d->nama_pegawai }}</td>
                    <td>{{ $d->username }}</td>
                    <td>{{ $d->email }}</td>
                    <td>{{ $d->no_hp }}</td>
                    <td><a href="/pegawai/ubah/{{ $d->pegawai_id }}">Ubah</a> | <a href="/pegawai/hapus/{{ $s->pegawai_id }}">Hapus</a></td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
