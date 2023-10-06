<form action="{{ route('Barang.update',$brgs->id)}}" method="POST">
@csrf
@method('PUT')

<label for="nama">nama</label>
<input type="text" name="nama" id="nama" value="{{$brgs->nama}}">

<label for="harga">harga</label>
<input type="number" name="harga" id="harga" value="{{$brgs->harga}}">

<button type="submit" >update</button>
<button><a href="{{ route('Barang.index')}}">Batal</a></button>
</form>