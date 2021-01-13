@extends('layout/main')
@section('title','Data Instruktur' )
@section('container')

<section id="home" class="slider-area with-gradiant full-opacity">
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="service-single">
                        <h2>Daftar Data Instruktur KEMUDI</h2>
                    <!--<p>Nemo enim ipsam voluptatem quia voluptas sit </p>-->
                        <table class="table">
                            
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Usia</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Jumlah Murid yg Dilatih</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $instruktur as $ins )
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$ins->nama}}</td>
                                    <td>{{$ins->usia}}</td>
                                    <td>{{$ins->alamat}}</td>
                                    <td>{{$ins->jumlahmurid}}</td>
                                    <td>
                                        <a href="" class"badge badge-success">Edit</a>
                                        <a href="" class"badge badge-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                        <div class="about-left-img">
                            <img src="assets/img/fotolpk.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
