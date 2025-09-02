@extends('layouts.app')

@section('content')
    <section class="container-fluid py-4">
        <div class="row mx-md-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/kategori-produks">KategoriProduks</a></li>
                        <li class="breadcrumb-item active" aria-current="create">Add Kategori Produk</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Kategori Produk
                            <a class="btn btn-primary float-end btn-sm" href="{{ route('kategori-produks.index') }}"> Back </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                        <div class="col-md-6">
                            <strong>Nama Kategori:</strong>
                            {{ $kategoriProduk->nama_kategori }}
                        </div>
                        <div class="col-md-6">
                            <strong>Keterangan:</strong>
                            {{ $kategoriProduk->keterangan }}
                        </div>
                        <div class="col-md-6">
                            <strong>Created By:</strong>
                            {{ $kategoriProduk->created_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Updated By:</strong>
                            {{ $kategoriProduk->updated_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Deleted By:</strong>
                            {{ $kategoriProduk->deleted_by }}
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
