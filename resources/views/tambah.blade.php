<!DOCTYPE html>
<html>

<head>
    <title>Tambah Pegawai</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="py-4 mx-8">

        <h3 class="text-4xl font-bold text-center">Data Pegawai</h3>

        <a href="/pegawai" class="p-2 border-2 border-black"> Kembali</a>

        <br />
        <br />

        <form action="/pegawai/store" method="post">
            {{ csrf_field() }}
            <table>
                <div class="grid items-center justify-center grid-cols-2 gap-2 p-4 bg-teal-600 border border-black">
                    <span>Nama</span>
                    <input type="text" name="nama" required="required" class="p-2 border border-black">
                    <span>Jabatan</span>
                    <input type="text" name="jabatan" required="required" class="p-2 border border-black">
                    <span>Umur</span>
                    <input type="text" name="umur" required="required" class="p-2 border border-black">
                    <span>Alamat</span>
                    <textarea name="alamat" required="required" class="p-2 border border-black"></textarea>
                </div>
                <button type="submit" value="Simpan Data" class="p-4 mt-8 border-2 border-black">Simpan Data</button>
            </table>
        </form>
    </div>

</body>

</html>
