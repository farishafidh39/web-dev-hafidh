@extends('layouts.app')

@section('content')
    <section class="container-fluid py-4">
        <div class="row mx-md-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/pemesanan-items">PemesananItems</a></li>
                        <li class="breadcrumb-item active" aria-current="create">Add Pemesanan Item</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Pemesanan Item
                            <a class="btn btn-primary float-end btn-sm" href="{{ route('pemesanan-items.index') }}"> Back </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                        <div class="col-md-6">
                            <strong>Pemesanan :</strong>
                            {{ $pemesananItem->pemesanan_id }}
                        </div>
                        <div class="col-md-6">
                            <strong>Produk :</strong>
                            {{ $pemesananItem->produk_id }}
                        </div>
                        <div class="col-md-6">
                            <strong>Jumlah:</strong>
                            {{ $pemesananItem->jumlah }}
                        </div>
                        <div class="col-md-6">
                            <strong>Harga:</strong>
                            {{ $pemesananItem->harga }}
                        </div>
                        <div class="col-md-6">
                            <strong>Created By:</strong>
                            {{ $pemesananItem->created_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Updated By:</strong>
                            {{ $pemesananItem->updated_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Deleted By:</strong>
                            {{ $pemesananItem->deleted_by }}
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
