<body>
    <h1>Form Ubah Data User</h1>
    <a href="http://localhost/washcoresc/public/pegawai">Kembali</a>

    <form method="post" action="http://localhost/washcoresc/public/pegawai/ubah_simpan/{{ $data->user_id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label for="nama_pegawai">Nama Pegawai</label>
        <input type="text" id="nama_pegamai" name="nama_pegawai" placeholder="Masukkan Nama Lengkap">
        <br>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan Username">
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan Email Anda">
        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan Password">
        <br><br>

        <label for="no_hp">No HP</label>
        <input type="no_hp" id="no_hp" name="no_hp" placeholder="Masukkan No HP Aktif">
        <br><br>

        <label for="alamat">Alamat</label>
        <input type="alamat" id="alamat" name="alamat" placeholder="Masukkan Alamat Lengkap Anda">
        <br><br>

        <input type="submit" class="btn btn-success" value="Simpan"> 
    </form>
</body>
