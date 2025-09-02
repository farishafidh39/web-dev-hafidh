@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row mx-md-5">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="pembayarans">Pembayarans</li>
                </ol>
            </nav>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Pembayaran
                            <a href="{{ route('pembayarans.create') }}" class="btn btn-primary float-end btn-sm"><i class="fa fa-solid fa-plus"></i> Create New</a>
                        </div>
                        <div class="card-body">
                            <!-- Search and Filter Form -->
                            <form action="{{ route('pembayarans.index') }}" method="GET" class="row g-3">
                                <div class="col-md-4">
                                    <input type="text" name="search" class="form-control form-control-sm" placeholder="Search" value="{{ request('search') }}">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-sm">Search</button>
                                    <a href="{{ route('pembayarans.index') }}"><button type="submit" class="btn btn-secondary btn-sm">Search</button></a>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>

                                            <th>Pemesanan </th>
                                            <th>Charge </th>
                                            <th>Status</th>
                                            <th>Payment Amount</th>
                                            <th>Payment Amount Crypto</th>
                                            <th>Crypto Currency</th>
                                            <th>Tx Hashs</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pembayarans as $pembayaran)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $pembayaran->name }}</td>
                                            <td>{{ $pembayaran->name }}</td>
                                            <td>{{ $pembayaran->status }}</td>
                                            <td>{{ $pembayaran->payment_amount }}</td>
                                            <td>{{ $pembayaran->payment_amount_crypto }}</td>
                                            <td>{{ $pembayaran->crypto_currency }}</td>
                                            <td>{{ $pembayaran->tx_hashs }}</td>

                                            <td>
                                                <form action="{{ route('pembayarans.destroy',$pembayaran->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pembayarans.show',$pembayaran->id) }}"><i class="fa fa-fw fa-eye"></i> Show </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pembayarans.edit',$pembayaran->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! $pembayarans->appends(request()->query())->links() !!}
        </div>
    </div>
</div>
@endsection