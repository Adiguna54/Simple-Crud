<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Data Pegawai</title>
</head>

<body>
    
    <div class="py-4 mx-8">
        <div class="pb-8">
            <p class="text-4xl font-bold text-center">Data Pegawai</p>
            <a href="/pegawai/tambah" class="p-2 border-2 border-black"> + Tambah Pegawai Baru</a>
        </div>

        <div>


            @foreach ($pegawai as $pegawais)
                <table class="w-full border-2 border-black">
                    <tr
                        class="grid items-center justify-center grid-cols-5 bg-teal-600 border-b-2 divide-x-2 divide-black border-b-black">
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                    <tr class="grid grid-cols-5 text-center divide-x-2 divide-black">
                        <td>{{ $pegawais->pegawai_nama }}</td>
                        <td>{{ $pegawais->pegawai_jabatan }}</td>
                        <td>{{ $pegawais->pegawai_umur }}</td>
                        <td>{{ $pegawais->pegawai_alamat }}</td>

                        <td class="text-blue-700">
                            <a href="/pegawai/edit/{{ $pegawais->id }}" class="underline">Edit</a>
                            <a href="/pegawai/hapus/{{ $pegawais->id }}" class="underline">Hapus</a>
                        </td>
                    </tr>
                </table>
            @endforeach
        </div>
    </div>
</body>

</html>
