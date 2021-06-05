<form action="{{ route('barang.store')}}" method="post">
    @csrf
    id: <input type="text" name="id_pasien">
    nama: <input type="text" name="nama">
    harga: <input type="text" name="harga">
    <button type="submit">Simpan</button>
</form>