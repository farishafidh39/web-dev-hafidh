@extends('layouts.app')

@section('content')
    <section class="container-fluid py-4">
        <div class="row mx-md-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/konsumens">Konsumens</a></li>
                        <li class="breadcrumb-item active" aria-current="create">Add Konsumen</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Konsumen
                            <a class="btn btn-primary float-end btn-sm" href="{{ route('konsumens.index') }}"> Back </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                        <div class="col-md-6">
                            <strong>Nama Konsumen:</strong>
                            {{ $konsumen->nama_konsumen }}
                        </div>
                        <div class="col-md-6">
                            <strong>Email:</strong>
                            {{ $konsumen->email }}
                        </div>
                        <div class="col-md-6">
                            <strong>No Hp:</strong>
                            {{ $konsumen->no_hp }}
                        </div>
                        <div class="col-md-6">
                            <strong>Jenis Kelamin:</strong>
                            {{ $konsumen->jenis_kelamin }}
                        </div>
                        <div class="col-md-6">
                            <strong>Alamat:</strong>
                            {{ $konsumen->alamat }}
                        </div>
                        <div class="col-md-6">
                            <strong>Foto:</strong>
                            {{ $konsumen->foto }}
                        </div>
                        <div class="col-md-6">
                            <strong>User :</strong>
                            {{ $konsumen->user_id }}
                        </div>
                        <div class="col-md-6">
                            <strong>Created By:</strong>
                            {{ $konsumen->created_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Updated By:</strong>
                            {{ $konsumen->updated_by }}
                        </div>
                        <div class="col-md-6">
                            <strong>Deleted By:</strong>
                            {{ $konsumen->deleted_by }}
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
