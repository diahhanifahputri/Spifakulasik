@extends('layout')
@section('judul')
SPIFAKULASIK
@endsection
@section('header1')

@endsection('header1')
@section('navbar2')
                    <li>
                        <a class="page-scroll" href="{{URL::to('/logout')}}">Logout</a>
                    </li>
@endsection('navbar2')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pelapor</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <ul class="list-unstyled components" style="padding-top: 100px">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">PELAPOR</a>
                </li>
                <li>
                    <a href="{{url('list')}}" style="color: black"><i><img src="css/img/list.png"></i> Lihat Laporan</a>
                </li>
                <li>
                    <a href="{{url('laporan/create')}}" style="color: black"><i><img src="css/img/melapor.png"> Tambah Laporan</i></a>
                </li>
            </ul>
        </nav>
        <!--  -->

        <div id="content" style="padding-top: 100px">
<table class="table">
<thead>
  <tr>
    <th scope="col">Nama Laporan</th>
    <th scope="col">Jenis Infrastruktur</th>
    <th scope="col">Kerusakan yang Terjadi</th>
    <th scope="col">Bencana yang Menyebabkan</th>
    <th scope="col">Keterbatasan Pemanfaatan</th>
    <th scope="col">Gambar Kerusakan</th>
    <th scope="col">lokasi</th>
    <th scope="col">Aksi</th>
  </tr>
</thead>
<tbody>
  @foreach($laporan as $laporan)
  <tr>
    <td>{{$laporan -> jenisInfra }}</td>
    <td>{{$laporan -> jenisInfra }}</td>
    <td>{{$laporan -> kerusakan }}</td>
    <td>{{$laporan -> penyebabB }}</td>
    <td>{{$laporan -> keterbatasan }}</td>
    <td>{{$laporan -> gambar }}</td>
    <td>{{$laporan -> jadwal -> lokasi }}</td>

  </tr>
  @endforeach
</tbody>
</table>

        </div>
    </div>
  </body>
</html>







