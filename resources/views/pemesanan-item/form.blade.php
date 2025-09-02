
        
    <div class="col-md-6">
        <label for="pemesanan_id">Pemesanan</label>
        
        <select class="form-select @error('pemesanan_id') is-invalid @enderror" name="pemesanan_id" id="pemesanan_id">
            <option value="">Select Pemesanan</option>
            @foreach($pemesanans as $relatedItem)
                <option value="{{ $relatedItem->id }}" {{ old('pemesanan_id', @$pemesananItem->pemesanan_id) == $relatedItem->id ? 'selected' : '' }}>
                    {{ $relatedItem->name }}
                </option>
            @endforeach
        </select>
        @error('pemesanan_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="produk_id">Produk</label>
        
        <select class="form-select @error('produk_id') is-invalid @enderror" name="produk_id" id="produk_id">
            <option value="">Select Produk</option>
            @foreach($produks as $relatedItem)
                <option value="{{ $relatedItem->id }}" {{ old('produk_id', @$pemesananItem->produk_id) == $relatedItem->id ? 'selected' : '' }}>
                    {{ $relatedItem->name }}
                </option>
            @endforeach
        </select>
        @error('produk_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
        <div class="col-md-6">
            <label for="jumlah">Jumlah</label>
            <input class="form-control @error('jumlah') is-invalid @enderror" placeholder="Jumlah" name="jumlah" type="text" value="{{ old('jumlah',@$pemesananItem->jumlah) }}" id="jumlah">
            @error('jumlah')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="harga">Harga</label>
            <input class="form-control @error('harga') is-invalid @enderror" placeholder="Harga" name="harga" type="text" value="{{ old('harga',@$pemesananItem->harga) }}" id="harga">
            @error('harga')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="created_by">Created By</label>
            <input class="form-control @error('created_by') is-invalid @enderror" placeholder="Created By" name="created_by" type="text" value="{{ old('created_by',@$pemesananItem->created_by) }}" id="created_by">
            @error('created_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="updated_by">Updated By</label>
            <input class="form-control @error('updated_by') is-invalid @enderror" placeholder="Updated By" name="updated_by" type="text" value="{{ old('updated_by',@$pemesananItem->updated_by) }}" id="updated_by">
            @error('updated_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="deleted_by">Deleted By</label>
            <input class="form-control @error('deleted_by') is-invalid @enderror" placeholder="Deleted By" name="deleted_by" type="text" value="{{ old('deleted_by',@$pemesananItem->deleted_by) }}" id="deleted_by">
            @error('deleted_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
