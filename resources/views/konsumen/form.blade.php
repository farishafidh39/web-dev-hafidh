
        
        <div class="col-md-6">
            <label for="nama_konsumen">Nama Konsumen</label>
            <input class="form-control @error('nama_konsumen') is-invalid @enderror" placeholder="Nama Konsumen" name="nama_konsumen" type="text" value="{{ old('nama_konsumen',@$konsumen->nama_konsumen) }}" id="nama_konsumen">
            @error('nama_konsumen')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="email">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" type="text" value="{{ old('email',@$konsumen->email) }}" id="email">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="no_hp">No Hp</label>
            <input class="form-control @error('no_hp') is-invalid @enderror" placeholder="No Hp" name="no_hp" type="text" value="{{ old('no_hp',@$konsumen->no_hp) }}" id="no_hp">
            @error('no_hp')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input class="form-control @error('jenis_kelamin') is-invalid @enderror" placeholder="Jenis Kelamin" name="jenis_kelamin" type="text" value="{{ old('jenis_kelamin',@$konsumen->jenis_kelamin) }}" id="jenis_kelamin">
            @error('jenis_kelamin')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="alamat">Alamat</label>
            <input class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" name="alamat" type="text" value="{{ old('alamat',@$konsumen->alamat) }}" id="alamat">
            @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="foto">Foto</label>
            <input class="form-control @error('foto') is-invalid @enderror" placeholder="Foto" name="foto" type="text" value="{{ old('foto',@$konsumen->foto) }}" id="foto">
            @error('foto')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    <div class="col-md-6">
        <label for="user_id">User</label>
        
        <select class="form-select @error('user_id') is-invalid @enderror" name="user_id" id="user_id">
            <option value="">Select User</option>
            @foreach($users as $relatedItem)
                <option value="{{ $relatedItem->id }}" {{ old('user_id', @$konsumen->user_id) == $relatedItem->id ? 'selected' : '' }}>
                    {{ $relatedItem->name }}
                </option>
            @endforeach
        </select>
        @error('user_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
        <div class="col-md-6">
            <label for="created_by">Created By</label>
            <input class="form-control @error('created_by') is-invalid @enderror" placeholder="Created By" name="created_by" type="text" value="{{ old('created_by',@$konsumen->created_by) }}" id="created_by">
            @error('created_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="updated_by">Updated By</label>
            <input class="form-control @error('updated_by') is-invalid @enderror" placeholder="Updated By" name="updated_by" type="text" value="{{ old('updated_by',@$konsumen->updated_by) }}" id="updated_by">
            @error('updated_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="deleted_by">Deleted By</label>
            <input class="form-control @error('deleted_by') is-invalid @enderror" placeholder="Deleted By" name="deleted_by" type="text" value="{{ old('deleted_by',@$konsumen->deleted_by) }}" id="deleted_by">
            @error('deleted_by')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
