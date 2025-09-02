<div class="col-md-6">
    <label for="konsumen_id">Konsumen</label>

    <select class="form-select @error('konsumen_id') is-invalid @enderror" name="konsumen_id" id="konsumen_id">
        <option value="">Select Konsumen</option>
        @foreach($konsumens as $relatedItem)
        <option value="{{ $relatedItem->id }}" {{ old('konsumen_id', @$keranjang->konsumen_id) == $relatedItem->id ? 'selected' : '' }}>
            {{ $relatedItem->nama_konsumen }}
        </option>
        @endforeach
    </select>
    @error('konsumen_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="produk_id">Produk</label>

    <select class="form-select @error('produk_id') is-invalid @enderror" name="produk_id" id="produk_id">
        <option value="">Select Produk</option>
        @foreach($produks as $relatedItem)
        <option value="{{ $relatedItem->id }}" {{ old('produk_id', @$keranjang->produk_id) == $relatedItem->id ? 'selected' : '' }}>
            {{ $relatedItem->nama_produk  }}
        </option>
        @endforeach
    </select>
    @error('produk_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="jumlah">Jumlah</label>
    <input class="form-control @error('jumlah') is-invalid @enderror" placeholder="Jumlah" name="jumlah" type="text" value="{{ old('jumlah',@$keranjang->jumlah) }}" id="jumlah">
    @error('jumlah')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="created_by">Created By</label>
    <input class="form-control @error('created_by') is-invalid @enderror" placeholder="Created By" name="created_by" type="text" value="{{ old('created_by',@$keranjang->created_by) }}" id="created_by">
    @error('created_by')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="updated_by">Updated By</label>
    <input class="form-control @error('updated_by') is-invalid @enderror" placeholder="Updated By" name="updated_by" type="text" value="{{ old('updated_by',@$keranjang->updated_by) }}" id="updated_by">
    @error('updated_by')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="deleted_by">Deleted By</label>
    <input class="form-control @error('deleted_by') is-invalid @enderror" placeholder="Deleted By" name="deleted_by" type="text" value="{{ old('deleted_by',@$keranjang->deleted_by) }}" id="deleted_by">
    @error('deleted_by')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>