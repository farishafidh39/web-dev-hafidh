@extends('layouts.app')


@section('content')
    <section class=" container-fluid py-4">
        <div class="row mx-md-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/konsumens">Konsumens</a></li>
                        <li class="breadcrumb-item active" aria-current="edit">Edit Konsumen</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        Update Konsumen
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('konsumens.update', $konsumen->id) }}"  role="form" enctype="multipart/form-data" class="row g-3">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('konsumen.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
