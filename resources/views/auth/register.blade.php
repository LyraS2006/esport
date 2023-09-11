<!-- resources/views/auth/register.blade.php -->
 
@extends('layouts.registerapp')

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
                            <h2 data-text="Registrasi">Registrasi</h2>
                            <form action="/register" method="POST" class="my-login-validation">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama<font color="red">*</font></label>
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
                                        <option style="background-color: #1d2b3a; color: white;" value="1">X</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="2">XI</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="3">XII</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Kelasnya juga diisi
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="jurusan">Jurusan <font color="red">*</font></label>
                                    <select name="jurusan" id="jurusan" class="form-control" required>
                                        <option class="tdkpilih">Pilih Jurusan</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="1">Bisnis Digital</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="2">Manajemen Perkantoran</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="3">Akuntansi</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="4">Layanan Perbankan</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="5">Rekayasa Perangkat Lunak</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="6">Desain Komunikasi Visual</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="7">Teknik Komputer Jaringan</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="8">Produksi dan Siaran Program Televisi</option>
                                        <option style="background-color: #1d2b3a; color: white;" value="9 ">Produksi Film</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Jurusannya juga diisi
                                    </div>
                                </div>

                                <div class="form-groupp">
                                    <label for="jenis_kelamin">Jenis Kelamin <font color="red">*</font></label>
                                    <div class="option-radio">
                                          <input class="form-option" type="radio" id="1" name="jenis_kelamin" value="1" required>
                                          <label for="1">Laki - Laki</label>
                                          <input class="form-option" type="radio" id="2" name="jenis_kelamin" value="2">
                                          <label for="1">Perempuan</label>
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