@extends('layouts.app')

@section('content')
    <section class="container-fluid py-4">
        <div class="row mx-md-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/keranjangs">Keranjangs</a></li>
                        <li class="breadcrumb-item active" aria-current="create">Add Keranjang</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Keranjang
                            <a class="btn btn-primary float-end btn-sm" href="{{ route('keranjangs.index') }}"> Back </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                        <div class="col-md-6">
                            <strong>Konsumen :</strong>
                            {{ $keranjang->konsumen_id }}
                        </div>
                        <div class="col-md-6">
                            <strong>Produk :</strong>
                            {{ $keranjang->produk_id }}
                        </div>
                        <div class="col-md-6">
                            <strong>Jumlah:</strong>
                            {{ $keranjang->jumlah }}
                        </div>
                        <div class="col-md-6">
                            <strong>Created By:</strong>
                            {{ $keranjang->created_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Updated By:</strong>
                            {{ $keranjang->updated_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Deleted By:</strong>
                            {{ $keranjang->deleted_by }}
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
