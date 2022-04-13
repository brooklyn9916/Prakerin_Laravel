@extends('layouts.main')

@section('container')
<form methods="post" action="{{route('inputdata.store')}}">
  {{csrf_field()}}
  <div class="mb-3">
    <label for="nama" >Nama Lengkap</label>
    <input type="text" class="form-control" placeholder="Nama" name="nama">
  </div>
  <div class="mb-3">
    <label for="nik" >NIK</label>
    <input type="number" class="form-control" placeholder="NIK" name="nik">
  </div>
  <div class="mb-3">
    <label for="nisn" >NIS</label>
    <input type="number" class="form-control" placeholder="NIS" name="nisn">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="example@example.co.id" name="email">
  </div>
  <div>
  <label for="images" >Gambar Background Merah</label>
  <input type="file" class="form-control" id="gambar" placeholder="images"name="images">
  </div>
  <br>
  <div>
  <label for="images" >Foto KTP atau KK</label>
  <input type="file" class="form-control" id="ktpkk" placeholder="images" name="images">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection