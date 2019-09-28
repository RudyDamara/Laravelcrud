@extends('layouts.master')

@section('content')

    <div class="row">

        <!-- div -->
        <div class="col-md-6">
            <h1>Hallo Indonesia</h1>
        </div>
        <!-- end div -->
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> {{session('sukses')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif
        <!-- modal div -->
        <div class="col-md-6">
            <div class="modal fade" id="modal_input" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="">Mahasiswa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <form class="" action="/mahasiswa/create" method="post">
                        {{csrf_field()}}
                            <div class="modal-body">

                                <!-- <input type="text" name="id_pasien" id="id"> -->

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">NIM</label>
                                        <input type="text" class="form-control" name="nim" id="nim" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" >Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal div -->

        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_input">Tambah Mahasiswa</button>

        <!-- table -->
        <table class="table table-hover">
        <thead>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </thead>
        <tbody>
            @foreach($data_mahasiswa as $mahasiswa)
            <tr>
                <td>{{$mahasiswa->nim}}</td>
                <td>{{$mahasiswa->nama}}</td>
                <td>{{$mahasiswa->alamat}}</td>
                <td>
                    <a href="./mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning"> Update </a>
                    <a href="./mahasiswa/{{$mahasiswa->id}}/hapus" class="btn btn-danger"> Hapus </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <!-- table -->
    </div>
    <!-- end div row -->
@endsection