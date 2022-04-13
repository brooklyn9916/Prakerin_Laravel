
@extends ('layouts.main')

@section ('container')
  <h1>Halaman About</h1>
    <h3> {{$nama}} </h3>
    <p> {{$NIK}} </P>
    <img src="images/{{ $GAMBAR }}" alt="{{ $nama }}" width="200px">
    
@endsection