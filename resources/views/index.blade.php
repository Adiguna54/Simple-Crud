<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <h3>www.malasngoding.com</h3>
    <p>Seri Tutorial Laravel Lengkap Dari Dasar</p>
    <p>Ini adalah view blog. ada di route blog.</p>

    <div class="py-4 mx-8 bg-lime-400">
        <span class="font-bold text-3xl">Data Pegawai</span>

        <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

        <div>


            @foreach ($pegawai as $p)
                <table class="border-2 border-black w-full text-center">
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                    <tr>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->pegawai_jabatan }}</td>
                        <td>{{ $p->pegawai_umur }}</td>
                        <td>{{ $p->pegawai_alamat }}</td>
                        <td>
                            <a href="/pegawai/edit/{{ $p->id }}">Edit</a>
                            <a href="/pegawai/hapus/{{ $p->id }}">Hapus</a>
                        </td>
                    </tr>
                </table>
            @endforeach
        </div>
    </div>
</body>

</html>
