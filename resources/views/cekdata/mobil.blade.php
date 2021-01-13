@extends('layout/main')
@section('title','Data Mobil' )
@section('container')

<section id="home" class="slider-area with-gradiant full-opacity">
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="service-single">
                        <h2>Daftar Data Mobil KEMUDI</h2>
                    <!--<p>Nemo enim ipsam voluptatem quia voluptas sit </p>-->
                        <table class="table">
                            
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">No. Polisi</th>
                                    <th scope="col">Merk/Tipe</th>
                                    <th scope="col">Warna</th>
                                    <th scope="col">Transmisi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $mobil as $mbl )
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$mbl->nopolisi}}</td>
                                    <td>{{$mbl->merk}}</td>
                                    <td>{{$mbl->warna}}</td>
                                    <td>{{$mbl->transmisi}}</td>
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
