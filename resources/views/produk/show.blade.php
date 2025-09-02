@extends('layouts.app')

@section('content')
    <section class="container-fluid py-4">
        <div class="row mx-md-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/produks">Produks</a></li>
                        <li class="breadcrumb-item active" aria-current="create">Add Produk</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Produk
                            <a class="btn btn-primary float-end btn-sm" href="{{ route('produks.index') }}"> Back </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                        <div class="col-md-6">
                            <strong>Nama Produk:</strong>
                            {{ $produk->nama_produk }}
                        </div>
                        <div class="col-md-6">
                            <strong>Harga:</strong>
                            {{ $produk->harga }}
                        </div>
                        <div class="col-md-6">
                            <strong>Jumlah Tersedia:</strong>
                            {{ $produk->jumlah_tersedia }}
                        </div>
                        <div class="col-md-6">
                            <strong>Gambar Produk:</strong>
                            {{ $produk->gambar_produk }}
                        </div>
                        <div class="col-md-6">
                            <strong>Created By:</strong>
                            {{ $produk->created_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Updated By:</strong>
                            {{ $produk->updated_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Deleted By:</strong>
                            {{ $produk->deleted_by }}
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
