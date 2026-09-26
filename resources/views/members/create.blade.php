<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Anggota</title>
    <style>
        body { font-family: sans-serif; margin: 40px; max-width: 500px; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input, textarea, select { width: 100%; padding: 6px; margin-top: 4px; box-sizing: border-box; }
        .btn { margin-top: 20px; padding: 8px 16px; background: #2563eb; color: #fff; border: none; }
    </style>
</head>
<body>
    <h1>Tambah Anggota</h1>
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <label>Nama</label><input type="text" name="nama" value="{{ old('nama') }}">
        <label>NIM</label><input type="text" name="nim" value="{{ old('nim') }}">
        <label>Email</label><input type="email" name="email" value="{{ old('email') }}">
        <label>Nomor Telepon</label><input type="text" name="nomor_telepon" value="{{ old('nomor_telepon') }}">
        <label>Alamat</label><textarea name="alamat">{{ old('alamat') }}</textarea>
        <label>Status</label>
        <select name="status">
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
        </select>
        <button type="submit" class="btn">Simpan</button>
    </form>
</body>
</html>