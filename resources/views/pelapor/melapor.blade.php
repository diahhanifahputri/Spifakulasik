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
<div class="container" style="padding-top: 100px">
    <div class="card">
        <a href="{{url('laporan')}}">< KEMBALI</a>
        <div class="card-header">
            <h3 style="text-align: center;">Form Laporan</h3>
        </div>
    </div>
    <div class="container" style="margin-left: 0px; margin-top: 50px" style="padding-top: 0px">
        <div class="col-lg-12">
            <form name="form" action="" onsubmit="return validasi()" method="post">
                {{csrf_field()}}
                <table>
                    <tr>
                        <td width="250"><b>Nama Laporan</b><span class="red">*</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="namaLaporan" style="width: 200%"></td>
                    </tr>
                    <tr>
                        <td width="250"><b>Jenis Infrastruktur</b><span class="red">*</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="jenisInfra" style="width: 200%"></td>
                    </tr>
                    <tr>
                        <td><b>Kerusakan yang Terjadi</b><span class="red">*</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="kerusakan" style="width: 200%"></td>
                    </tr>
                    <tr>
                        <td><b>Bencana yang Menyebabkan</b><span class="red">*</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="penyebabB" style="width: 200%"></td>
                    </tr>
                    <tr>
                        <td><b>Keterbatasan Pemanfaatan</b><span class="red">*</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="keterbatasan" style="width: 200%"></td>
                    </tr>                   
                     <tr>
                        <td> <b>Gambar Kerusakan</b>
                        <td>:</td>
                        <td><input type='file' placeholder='Pilih Foto' id="foto" name=foto /></td>
                    </tr>
                </table>
            </form>
        </div>
        </div>
            <div class="row">
            
            <div class="col-lg-12">
                <p><b>Lokasi</b></p>
                <div class="map">
                    <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed"></iframe>
                </div>
                    <div class="btn1">
                    <center>
                        <button type="submit" class="btn btn-primary mb-2">TAMBAH</button>
                        <input type = 'reset' name = 'Reset' value = 'Reset' />
                    </center>
                    </div>
                    </div>
                </div>
            </div>
