<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Data Pegawai</title>
</head>

<body class="mx-8">

    <br>

    <x-common.modal.success-failed-modal />

    <br>

    <div class="py-4">
        <p class="text-4xl font-bold text-center">Data Pegawai</p>
        <div class="flex flex-row items-center justify-between pb-8">
            <div>
                <a href="{{ route('pegawai.tambah') }}" class="p-2 border-2 border-black"> + Tambah Pegawai Baru</a>
            </div>

            <form action="{{ route('pegawai.cari') }}" method="get">
                <div class="flex flex-row gap-4">
                    <input class="p-2 border-2 border-black" type="search" placeholder="Cari Pegawai ........"
                        name="cari" id="" value="{{ old('cari') }}">
                    <button class="w-20 p-2 border-2 border-black" type="submit" value="Cari">
                        Cari
                    </button>
                </div>
            </form>
        </div>

        <div>


            @foreach ($pegawai as $pegawais)
                <table class="w-full border-2 border-black">
                    <tr
                        class="grid items-center justify-center grid-cols-6 bg-teal-600 border-b-2 divide-x-2 divide-black border-b-black">
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Opsi</th>
                    </tr>
                    <tr class="grid grid-cols-6 text-center divide-x-2 divide-black">
                        <td>{{ $pegawais->pegawai_nama }}</td>
                        <td>{{ $pegawais->pegawai_jabatan }}</td>
                        <td>{{ $pegawais->pegawai_umur }}</td>
                        <td>{{ $pegawais->pegawai_alamat }}</td>
                        <td>{{ $pegawais->profile->no_telepon ?? 'No Phone Numbers' }}</td>

                        <td class="text-blue-700">
                            <a href="{{ route('pegawai.edit', $pegawais->id) }}">Edit</a>
                            <a href="{{ route('pegawai.hapus', $pegawais->id) }}">Hapus</a>
                        </td>
                    </tr>
                </table>
            @endforeach

            <br>
            <br>
        </div>

        <br>

        <div class="flex gap-2">
            <div class="flex flex-col">
                <span>Halaman</span>
                <span>Jumlah Data</span>
                <span>Data per Halaman</span>
            </div>

            <div class="flex flex-col">
                <span>: {{ $pegawai->currentPage() }}</span>
                <span>: {{ $pegawai->total() }}</span>
                <span>: {{ $pegawai->perPage() }}</span>
            </div>
        </div>

        <div>
            {{ $pegawai->links() }}
        </div>

    </div>

    
</body>

</html>
