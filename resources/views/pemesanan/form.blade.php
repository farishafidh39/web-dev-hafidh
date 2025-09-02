<div class="col-md-6">
    <label for="konsumen_id">Konsumen</label>

    <select class="form-select @error('konsumen_id') is-invalid @enderror" name="konsumen_id" id="konsumen_id">
        <option value="">Select Konsumen</option>
        @foreach($konsumens as $relatedItem)
        <option value="{{ $relatedItem->id }}" {{ old('konsumen_id', @$pemesanan->konsumen_id) == $relatedItem->id ? 'selected' : '' }}>
            {{ $relatedItem->nama_konsumen }}
        </option>
        @endforeach
    </select>
    @error('konsumen_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="total_pembelian">Total Pembelian</label>
    <input class="form-control @error('total_pembelian') is-invalid @enderror" placeholder="Total Pembelian" name="total_pembelian" type="text" value="{{ old('total_pembelian',@$pemesanan->total_pembelian) }}" id="total_pembelian">
    @error('total_pembelian')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="status">Status</label>
    <input class="form-control @error('status') is-invalid @enderror" placeholder="Status" name="status" type="text" value="{{ old('status',@$pemesanan->status) }}" id="status">
    @error('status')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="created_by">Created By</label>
    <input class="form-control @error('created_by') is-invalid @enderror" placeholder="Created By" name="created_by" type="text" value="{{ old('created_by',@$pemesanan->created_by) }}" id="created_by">
    @error('created_by')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="updated_by">Updated By</label>
    <input class="form-control @error('updated_by') is-invalid @enderror" placeholder="Updated By" name="updated_by" type="text" value="{{ old('updated_by',@$pemesanan->updated_by) }}" id="updated_by">
    @error('updated_by')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="deleted_by">Deleted By</label>
    <input class="form-control @error('deleted_by') is-invalid @enderror" placeholder="Deleted By" name="deleted_by" type="text" value="{{ old('deleted_by',@$pemesanan->deleted_by) }}" id="deleted_by">
    @error('deleted_by')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>