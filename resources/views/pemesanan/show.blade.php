@extends('layouts.app')

@section('content')
    <section class="container-fluid py-4">
        <div class="row mx-md-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/pemesanans">Pemesanans</a></li>
                        <li class="breadcrumb-item active" aria-current="create">Add Pemesanan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Pemesanan
                            <a class="btn btn-primary float-end btn-sm" href="{{ route('pemesanans.index') }}"> Back </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                        <div class="col-md-6">
                            <strong>Konsumen :</strong>
                            {{ $pemesanan->konsumen_id }}
                        </div>
                        <div class="col-md-6">
                            <strong>Total Pembelian:</strong>
                            {{ $pemesanan->total_pembelian }}
                        </div>
                        <div class="col-md-6">
                            <strong>Status:</strong>
                            {{ $pemesanan->status }}
                        </div>
                        <div class="col-md-6">
                            <strong>Created By:</strong>
                            {{ $pemesanan->created_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Updated By:</strong>
                            {{ $pemesanan->updated_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Deleted By:</strong>
                            {{ $pemesanan->deleted_by }}
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
