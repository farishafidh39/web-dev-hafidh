@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mx-md-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="kategori-produks">KategoriProduks</li>
                    </ol>
                </nav>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Kategori Produk
                                <a href="{{ route('kategori-produks.create') }}" class="btn btn-primary float-end btn-sm"><i class="fa fa-solid fa-plus"></i> Create New</a>
                            </div>
                            <div class="card-body">
                                <!-- Search and Filter Form -->
                                <form action="{{ route('kategori-produks.index') }}" method="GET" class="row g-3">
                                    <div class="col-md-4">
                                        <input type="text" name="search" class="form-control form-control-sm" placeholder="Search" value="{{ request('search') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary btn-sm">Search</button>
                                        <a href="{{ route('kategori-produks.index') }}"><button type="submit" class="btn btn-secondary btn-sm">Search</button></a>
                                    </div>
                                </form>
                                
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th>No</th>
                                                
										<th>Nama Kategori</th>
										<th>Keterangan</th>
										<th>Created By</th>
										<th>Updated By</th>
										<th>Deleted By</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kategoriProduks as $kategoriProduk)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    
											<td>{{ $kategoriProduk->nama_kategori }}</td>
											<td>{{ $kategoriProduk->keterangan }}</td>
											<td>{{ $kategoriProduk->created_by }}</td>
											<td>{{ $kategoriProduk->updated_by }}</td>
											<td>{{ $kategoriProduk->deleted_by }}</td>

                                                    <td>
                                                        <form action="{{ route('kategori-produks.destroy',$kategoriProduk->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary " href="{{ route('kategori-produks.show',$kategoriProduk->id) }}"><i class="fa fa-fw fa-eye"></i> Show </a>
                                                            <a class="btn btn-sm btn-success" href="{{ route('kategori-produks.edit',$kategoriProduk->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $kategoriProduks->appends(request()->query())->links() !!}
            </div>
        </div>
    </div>
@endsection
