@extends('layouts.app')

@section('content')
    <section class="container-fluid py-4">
        <div class="row mx-md-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/pembayarans">Pembayarans</a></li>
                        <li class="breadcrumb-item active" aria-current="create">Add Pembayaran</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Pembayaran
                            <a class="btn btn-primary float-end btn-sm" href="{{ route('pembayarans.index') }}"> Back </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                        <div class="col-md-6">
                            <strong>Pemesanan :</strong>
                            {{ $pembayaran->pemesanan_id }}
                        </div>
                        <div class="col-md-6">
                            <strong>Charge :</strong>
                            {{ $pembayaran->charge_id }}
                        </div>
                        <div class="col-md-6">
                            <strong>Status:</strong>
                            {{ $pembayaran->status }}
                        </div>
                        <div class="col-md-6">
                            <strong>Payment Amount:</strong>
                            {{ $pembayaran->payment_amount }}
                        </div>
                        <div class="col-md-6">
                            <strong>Payment Amount Crypto:</strong>
                            {{ $pembayaran->payment_amount_crypto }}
                        </div>
                        <div class="col-md-6">
                            <strong>Crypto Currency:</strong>
                            {{ $pembayaran->crypto_currency }}
                        </div>
                        <div class="col-md-6">
                            <strong>Tx Hashs:</strong>
                            {{ $pembayaran->tx_hashs }}
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
