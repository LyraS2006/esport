<!-- resources/views/auth/register.blade.php -->
 
@extends('layouts.app')

@section('content')
<div class="my-login-page">
    <section class="h-100">
<div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <div class="imgbox">
                                <img src="img/222.png" alt="">
                            </div>
                            <h2 data-text="REGISTRASI">REGISTRASI</h2>
                            <form action="/register" method="POST" class="my-login-validation">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama <font color="red">*</font></label>
                                    <input id="nama" type="text" class="form-control" name="nama" placeholder="" required autofocus>
                                    <div class="invalid-feedback">
                                        Siapa namamu? boleh kali kenalan xixi
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Nisn <font color="red">*</font></label>
                                    <input id="nisn" type="text" class="form-control" name="nisn" required>
                                    <div class="invalid-feedback">
                                        Nisn nya isi juga dongg
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kelas">Kelas <font color="red">*</font></label>
                                    <select name="kelas" id="kelas" class="form-control" required>
                                        <option class="option">Pilih Kelas</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="10">X</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="11">XI</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="12">XII</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Kelasnya juga diisi
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="jurusan">Jurusan <font color="red">*</font></label>
                                    <select name="jurusan" id="jurusan" class="form-control" required>
                                        <option class="tdkpilih">Pilih Jurusan</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="rpl">Rekayasa Perangkat Lunak</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="rpl-1">Rekayasa Perangkat Lunak - 1</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="rpl-2">Rekayasa Perangkat Lunak - 2</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="tkj-1">Teknik Komputer Jaringan - 1</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="tkj-2">Teknik Komputer Jaringan - 2</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="dkv-1">Desain Komunikasi Visual - 1</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="dkv-2">Desain Komunikasi Visual - 2</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="mm-1">Multimedia - 1</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="mm-2">Multimedia - 2</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="otkp-1">Otomatisasi dan Tata Kelola Perkantoran - 1</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="otkp-2">Otomatisasi dan Tata Kelola Perkantoran - 2</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="mp-1">Manajemen Perkantoran - 1</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="mp-2">Manajemen Perkantoran - 2</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="ak-1">Akuntansi - 1</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="ak-2">Akuntansi - 2</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="lb">Layanan Perbankan</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="pkm-1">Perbankan dan Keuangan Mikro - 1</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="pkm-2">Perbankan dan Keuangan Mikro - 2</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="bd-1">Bisnis Digital - 1</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="bd-2">Bisnis Digital - 2</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="bdp-1">Bisnis Daring dan Pemasaran - 1</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="bdp-2">Bisnis Daring dan Pemasaran - 2</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="psptv">Produksi dan Siaran Program Televisi</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Jurusannya juga diisi
                                    </div>
                                </div>

                                <div class="form-groupp">
                                    <label for="jenis_kelamin">Jenis Kelamin <font color="red">*</font></label>
                                    <div class="option-radio">
                                          <input class="form-option" type="radio" id="lakilaki" name="jenis_kelamin" value="lakilaki" required>
                                          <label for="lakilaki">Laki - Laki</label>
                                          <input class="form-option" type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
                                          <label for="perempuan">Perempuan</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        Jenis kelamin isi juga dongg
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="game">Game <font color="red">*</font></label>
                                    <select name="game" id="game" class="form-control" required>
                                        <option class="tdkpilih">Pilih Game</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="ml">Mobile Legend</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="pubg">PUBG Mobile</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="ff">Free Fire</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Nisn nya isi juga dongg
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="password">Password <font color="red">*</font></label>
                                    <input id="password" type="password" class="form-control" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password nya isi "random juga gapapa"
                                    </div>
                                </div>
                                <font color="red">*</font>
                                <font color="grey"><i>Harap di Cek Kembali Data Anda dengan Benar</i></font>

                                <div class="form-group m-0 mt-3">
                                    <button type="submit" class="btn btn-block">
                                        REGISTRASI
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Esports Smakensa Community
                    </div>
                </div>
            </div>
        </div></section>
</div>

@endsection