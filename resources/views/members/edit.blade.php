<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Anggota</title>
    <style>
        body { font-family: sans-serif; margin: 40px; max-width: 500px; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input, textarea, select { width: 100%; padding: 6px; margin-top: 4px; box-sizing: border-box; }
        .btn { margin-top: 20px; padding: 8px 16px; background: #2563eb; color: #fff; border: none; }
    </style>
</head>
<body>
    <h1>Edit Anggota</h1>
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama</label><input type="text" name="nama" value="{{ old('nama', $member->nama) }}">
        <label>NIM</label><input type="text" name="nim" value="{{ old('nim', $member->nim) }}">
        <label>Email</label><input type="email" name="email" value="{{ old('email', $member->email) }}">
        <label>Nomor Telepon</label><input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $member->nomor_telepon) }}">
        <label>Alamat</label><textarea name="alamat">{{ old('alamat', $member->alamat) }}</textarea>
        <label>Status</label>
        <select name="status">
            <option value="aktif" {{ $member->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ $member->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>
        <button type="submit" class="btn">Perbarui</button>
    </form>
</body>
</html>