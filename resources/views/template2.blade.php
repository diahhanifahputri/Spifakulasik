@extends('layout')
@section('judul')
SPIFAKULASIK
@endsection
@section('navbar1')
					<li>
                        <a class="page-scroll" href="{{URL::to('/')}}">Home</a>
                    </li>
@endsection
@section('navbar2')

@endsection


@section('header')
<header background-image: url('img/header-bg.jpg');>
        <div class="container">
    		<div class="intro-text">
        		 <div class="intro-lead-in">Sistem Pendataan Kerusakan Infrastruktur dan Fasilitas Publik yang Rusak akibat Bencana</div>
                <a href="{{ route ('login') }}" class="page-scroll btn btn-xl">Sign In</a>
                <a href="{{ route ('register') }}" class="page-scroll btn btn-xl">Sign Up</a>
        	</div>
        </div>
    </header>
@endsection