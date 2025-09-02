
        
        <div class="col-md-6">
            <label for="nama_kategori">Nama Kategori</label>
            <input class="form-control @error('nama_kategori') is-invalid @enderror" placeholder="Nama Kategori" name="nama_kategori" type="text" value="{{ old('nama_kategori',@$kategoriProduk->nama_kategori) }}" id="nama_kategori">
            @error('nama_kategori')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="keterangan">Keterangan</label>
            <input class="form-control @error('keterangan') is-invalid @enderror" placeholder="Keterangan" name="keterangan" type="text" value="{{ old('keterangan',@$kategoriProduk->keterangan) }}" id="keterangan">
            @error('keterangan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="created_by">Created By</label>
            <input class="form-control @error('created_by') is-invalid @enderror" placeholder="Created By" name="created_by" type="text" value="{{ old('created_by',@$kategoriProduk->created_by) }}" id="created_by">
            @error('created_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="updated_by">Updated By</label>
            <input class="form-control @error('updated_by') is-invalid @enderror" placeholder="Updated By" name="updated_by" type="text" value="{{ old('updated_by',@$kategoriProduk->updated_by) }}" id="updated_by">
            @error('updated_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="deleted_by">Deleted By</label>
            <input class="form-control @error('deleted_by') is-invalid @enderror" placeholder="Deleted By" name="deleted_by" type="text" value="{{ old('deleted_by',@$kategoriProduk->deleted_by) }}" id="deleted_by">
            @error('deleted_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
