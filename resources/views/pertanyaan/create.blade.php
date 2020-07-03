@extends('master')


@section('header_content')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Pertanyaan</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pertanyaan</a></li>
            <li class="breadcrumb-item active">Buat</li>
        </ol>
    </div>
@endsection


@section('content')
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Buat pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/pertanyaan" method="POST">
            <div class="card-body">  
                    @csrf
                    <label for="judul">Judul Pertanyaan</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Pertanyaan">
                    <label for="isi">Isi Pertanyaan</label>
                    <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="Masukkan Isi Pertanyaan"></textarea>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection