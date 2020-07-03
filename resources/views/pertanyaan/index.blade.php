@extends('master')

@section('header_content')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Daftar Pertanyaan</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Pertanyaan</a></li>
        </ol>
    </div>
@endsection

@section('content')
    @php
        dd($all_item);
    @endphp    


    
@endsection

@push('script')
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
    $(function () {
        $("#example1").DataTable();
    });
    </script>
@endpush