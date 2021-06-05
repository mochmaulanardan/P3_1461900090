<form action="{{ route('barang.store')}}" method="post">
    @csrf
    id: <input type="text" name="id">
    nama: <input type="text" name="id_pasien">
    alamat: <input type="text" name="id_dokter">
    <button type="submit">Simpan</button>
</form>