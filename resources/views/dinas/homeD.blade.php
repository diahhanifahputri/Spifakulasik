@extends('layout')
@section('judul')
SPIFAKULASIK
@endsection
@section('header1')

@endsection('header1')
@section('navbar2')
                    <li>
                        <a class="page-scroll" href="{{URL::to('/')}}">Logout</a>
                    </li>
@endsection('navbar2')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dinas</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            

            <ul class="list-unstyled components" style="padding-top: 100px">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">DINAS</a>
                </li>
                <li>
                    <a href="{{url('list')}}"><i><img src="css/img/list.png"></i></a>
                </li>
                <li>
                    <a href="{{url('cekD')}}"><i><img src="css/img/cek.png"></i></a>
                </li>
            </ul>
        </nav>
        <!--  -->

        <div id="content">
            @section('content')
            @show
        </div>

    </div>

  </body>
</html>


