<form action="{{ route('dokter.store')}}" method="post">
    @csrf
    id: <input type="text" name="id">
    id_pelanggan: <input type="text" name="id_kamar">
    id_barang: <input type="text" name="id_dokter">
    <button type="submit">Simpan</button>
</form>