<form action="{{ route('Barang.store') }}" method="post">
    @csrf
    <label for="nama">nama</label>
    <input type="text" name="nama" id="nama">

    <label for="harga">harga</label>
    <input type="number" name="harga" id="harga">

    <button type="submit" >simpan</button>
</form>