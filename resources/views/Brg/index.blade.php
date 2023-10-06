@foreach ($barangs as $item)
    {{$item ->nama}}
    {{$item ->harga}}

    <a href="{{ route('Barang.edit', $item->id) }}">edit</a>

    <form action="{{ route('Barang.destroy',$item->id) }}" method="POST" >
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button> 
    </form>
@endforeach

<a href="{{ route('Barang.create') }}">Tambah</a>