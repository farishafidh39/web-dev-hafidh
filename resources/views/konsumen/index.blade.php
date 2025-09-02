@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row mx-md-5">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="konsumens">Konsumens</li>
                </ol>
            </nav>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Konsumen
                            <a href="{{ route('konsumens.create') }}" class="btn btn-primary float-end btn-sm"><i class="fa fa-solid fa-plus"></i> Create New</a>
                        </div>
                        <div class="card-body">
                            <!-- Search and Filter Form -->
                            <form action="{{ route('konsumens.index') }}" method="GET" class="row g-3">
                                <div class="col-md-4">
                                    <input type="text" name="search" class="form-control form-control-sm" placeholder="Search" value="{{ request('search') }}">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-sm">Search</button>
                                    <a href="{{ route('konsumens.index') }}"><button type="submit" class="btn btn-secondary btn-sm">Search</button></a>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>

                                            <th>Nama Konsumen</th>
                                            <th>Email</th>
                                            <th>No Hp</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                            <th>User </th>
                                            <th>Created By</th>
                                            <th>Updated By</th>
                                            <th>Deleted By</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($konsumens as $konsumen)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $konsumen->nama_konsumen }}</td>
                                            <td>{{ $konsumen->email }}</td>
                                            <td>{{ $konsumen->no_hp }}</td>
                                            <td>{{ $konsumen->jenis_kelamin }}</td>
                                            <td>{{ $konsumen->alamat }}</td>
                                            <td>{{ $konsumen->foto }}</td>
                                            <td>{{ $konsumen->name }}</td>
                                            <td>{{ $konsumen->created_by }}</td>
                                            <td>{{ $konsumen->updated_by }}</td>
                                            <td>{{ $konsumen->deleted_by }}</td>

                                            <td>
                                                <form action="{{ route('konsumens.destroy',$konsumen->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('konsumens.show',$konsumen->id) }}"><i class="fa fa-fw fa-eye"></i> Show </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('konsumens.edit',$konsumen->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
            {!! $konsumens->appends(request()->query())->links() !!}
        </div>
    </div>
</div>
@endsection