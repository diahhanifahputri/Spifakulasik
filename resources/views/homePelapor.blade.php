@extends('layout')
@section('judul')
SPIFAKULASIK
@endsection
@section('navbar')
                    <li>
                        <a class="page-scroll" href="{{URL::to('/')}}">Logout</a>
                    </li>
@endsection('navbar')
      
<a href="{{url('prioritas/create')}}" class="btn btn-primary">TAMBAH</a>
<table class="table">
<thead>
  <tr>
    <th scope="row"></th>
    <th scope="row">Jenis Infrastruktur</th>span class="red">*</span>
    <th scope="row">Kerusakan yang Terjadi</th>span class="red">*</span>
    <th scope="row">Bencana yang Menyebabkan</th>span class="red">*</span>
    <th scope="row">Keterbatasan Pemanfaatan</th>span class="red">*</span>
    <th scope="row">Gambar Kerusakan</th>span class="red">*</span>
    <th scope="row">lokasi</th>span class="red">*</span>
    <td>Ya, saya sejutu bahwa data yang saya isikan dan /atau saya unggah adalah benar. sah, legal dan /atau sesuai dengan keadaan dan/atau kenyataan</td>
    <th scope="row">Aksi</th>
  </tr>
</thead>
<tbody>
  @foreach($prioritas as $prioritas)
  <tr>
    <th scope="col">123123</th>
    <td>{{$prioritas -> jenisInfra }}</td>
    <td>{{$prioritas -> kerusakan }}</td>
    <td>{{$prioritas -> penyebabBencana }}</td>
    <td>{{$prioritas -> keterbatasan }}</td>
    <td>{{$prioritas -> gambar }}</td>
    <td>{{$prioritas -> lokasi }}</td>
    
    <td>
      <a href="{{url('prioritas/'.$prioritas -> id.'/edit')}}" class="btn btn-primary">EDIT</a>
      <form action="{{url('prioritas/'.$prioritas -> id)}}" method="post">
        {{csrf_field()}} {{method_field('DELETE')}}
        <button type="submit" name="button" class="btn btn-danger">DELETE</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>

    