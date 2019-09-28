@extends('layouts.master')

@section('content')
<!-- div row -->
<div class="row">

    <!-- div -->
    <div class="col-md-12">
        <h1>Edit Mahasiswa Indonesia</h1>
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
    <form class="" action="/mahasiswa/{{$mahasiswa->id}}/update" method="post">
    {{csrf_field()}}
        <div class="modal-body">

            <!-- <input type="text" name="id_pasien" id="id"> -->

            <div class="modal-body">
                <div class="form-group">
                    <label for="">NIM</label>
                    <input value="{{$mahasiswa->nim}}" type="text" class="form-control" name="nim" id="nim" required>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input value="{{$mahasiswa->nama}}" type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5">{{$mahasiswa->alamat}} </textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary" >Daftar</button>
        </div>
    </form>
</div>
<!-- end div row -->
@endsection