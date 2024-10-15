<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pegawai</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{ $errors->any()?dd($errors->all()):'' }};
    <div class="py-4 mx-8">

        <h3 class="text-4xl font-bold text-center">Edit Pegawai</h3>
        <a href="/pegawai" class="p-2 border-2 border-black">Kembali</a>
        <br>
        <br>

        @foreach ($pegawai as $pegawais)
            <form action="{{ route('pegawai.update') }}" method="post">
                {{-- csrf_field fungsinya adalah sebagai fitur keamanan untuk pencegahan penginputan data dari luar aplikasi atau sistem --}}
                {{ csrf_field() }}
                <table>
                    <div class="grid items-center justify-center grid-cols-2 gap-2 p-4 bg-teal-600 border border-black">
                        <span>ID</span>
                        <input type="text" name="id" value="{{ $pegawais->id }}">
                        <span>Nama</span>
                        <input type="text" required="required" name="pname" value="{{ $pegawais->pegawai_nama }}"
                            class="p-2 border border-black">
                        <span>Jabatan</span>
                        <input type="text" required="required" name="pjabatan" value="{{ $pegawais->pegawai_jabatan }}"
                            class="p-2 border border-black">
                        <span>Umur</span>
                        <input type="number" required="required" name="pumur" value="{{ $pegawais->pegawai_umur }}"
                            class="p-2 border border-black">
                        <span>Alamat</span>
                        <textarea required="required" name="palamat" class="p-2 border border-black">{{ $pegawais->pegawai_alamat }}</textarea>
                    </div>
                    <button type="submit" value="Simpan Data" class="p-4 mt-8 border-2 border-black">Simpan
                        Data</button>
                </table>
            </form>
        @endforeach
    </div>
</body>

</html>
