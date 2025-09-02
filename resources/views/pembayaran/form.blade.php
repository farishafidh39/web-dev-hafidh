<div class="col-md-6">
    <label for="pemesanan_id">Pemesanan</label>

    <select class="form-select @error('pemesanan_id') is-invalid @enderror" name="pemesanan_id" id="pemesanan_id">
        <option value="">Select Pemesanan</option>
        @foreach($pemesanans as $relatedItem)
        <option value="{{ $relatedItem->id }}" {{ old('pemesanan_id', @$pembayaran->pemesanan_id) == $relatedItem->id ? 'selected' : '' }}>
            {{ $relatedItem->total_pembelian }}
        </option>
        @endforeach
    </select>
    @error('pemesanan_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="charge_id">Charge</label>

    <div class="col-md-6">
        <label for="charge_id">Charge</label>
        <input class="form-control @error('charge_id') is-invalid @enderror"
            placeholder="Charge"
            name="charge_id"
            type="text"
            value="{{ old('charge_id', @$pembayaran->charge_id) }}"
            id="charge_id">
        @error('charge_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6">
    <label for="status">Status</label>
    <input class="form-control @error('status') is-invalid @enderror" placeholder="Status" name="status" type="text" value="{{ old('status',@$pembayaran->status) }}" id="status">
    @error('status')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="payment_amount">Payment Amount</label>
    <input class="form-control @error('payment_amount') is-invalid @enderror" placeholder="Payment Amount" name="payment_amount" type="text" value="{{ old('payment_amount',@$pembayaran->payment_amount) }}" id="payment_amount">
    @error('payment_amount')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="payment_amount_crypto">Payment Amount Crypto</label>
    <input class="form-control @error('payment_amount_crypto') is-invalid @enderror" placeholder="Payment Amount Crypto" name="payment_amount_crypto" type="text" value="{{ old('payment_amount_crypto',@$pembayaran->payment_amount_crypto) }}" id="payment_amount_crypto">
    @error('payment_amount_crypto')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="crypto_currency">Crypto Currency</label>
    <input class="form-control @error('crypto_currency') is-invalid @enderror" placeholder="Crypto Currency" name="crypto_currency" type="text" value="{{ old('crypto_currency',@$pembayaran->crypto_currency) }}" id="crypto_currency">
    @error('crypto_currency')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="tx_hashs">Tx Hashs</label>
    <input class="form-control @error('tx_hashs') is-invalid @enderror" placeholder="Tx Hashs" name="tx_hashs" type="text" value="{{ old('tx_hashs',@$pembayaran->tx_hashs) }}" id="tx_hashs">
    @error('tx_hashs')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>