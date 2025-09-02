
        
        <div class="col-md-6">
            <label for="nama_produk">Nama Produk</label>
            <input class="form-control @error('nama_produk') is-invalid @enderror" placeholder="Nama Produk" name="nama_produk" type="text" value="{{ old('nama_produk',@$produk->nama_produk) }}" id="nama_produk">
            @error('nama_produk')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="harga">Harga</label>
            <input class="form-control @error('harga') is-invalid @enderror" placeholder="Harga" name="harga" type="text" value="{{ old('harga',@$produk->harga) }}" id="harga">
            @error('harga')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="jumlah_tersedia">Jumlah Tersedia</label>
            <input class="form-control @error('jumlah_tersedia') is-invalid @enderror" placeholder="Jumlah Tersedia" name="jumlah_tersedia" type="text" value="{{ old('jumlah_tersedia',@$produk->jumlah_tersedia) }}" id="jumlah_tersedia">
            @error('jumlah_tersedia')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="gambar_produk">Gambar Produk</label>
            <input class="form-control @error('gambar_produk') is-invalid @enderror" placeholder="Gambar Produk" name="gambar_produk" type="text" value="{{ old('gambar_produk',@$produk->gambar_produk) }}" id="gambar_produk">
            @error('gambar_produk')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="created_by">Created By</label>
            <input class="form-control @error('created_by') is-invalid @enderror" placeholder="Created By" name="created_by" type="text" value="{{ old('created_by',@$produk->created_by) }}" id="created_by">
            @error('created_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="updated_by">Updated By</label>
            <input class="form-control @error('updated_by') is-invalid @enderror" placeholder="Updated By" name="updated_by" type="text" value="{{ old('updated_by',@$produk->updated_by) }}" id="updated_by">
            @error('updated_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="deleted_by">Deleted By</label>
            <input class="form-control @error('deleted_by') is-invalid @enderror" placeholder="Deleted By" name="deleted_by" type="text" value="{{ old('deleted_by',@$produk->deleted_by) }}" id="deleted_by">
            @error('deleted_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
