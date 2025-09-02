
        
        <div class="col-md-6">
            <label for="name">Name</label>
            <input class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" type="text" value="{{ old('name',@$user->name) }}" id="name">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="email">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" type="text" value="{{ old('email',@$user->email) }}" id="email">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
