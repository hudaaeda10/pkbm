<form class="form-horizontal" action="/teacher/update/{{$teacher->id}}" method="post" role="form" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="form-group row">
        <label for="nama_depan" class="col-sm-2 col-form-label">Nama Depan</label>
        <div class="col-sm-10">
            <input type="text" value="{{ old('nama_depan') ?? $teacher->nama_depan }}" name="nama_depan" id="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror">
        </div>
        @error('nama_depan')
        <div class="text-danger mt-3">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="nama_belakang" class="col-sm-2 col-form-label">Nama Belakang</label>
        <div class="col-sm-10">
            <input type="text" value="{{ old('nama_belakang') ?? $teacher->nama_belakang }}" name="nama_belakang" id="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror">
        </div>
        @error('nama_belakang')
        <div class="text-danger mt-3">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="inputName2" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                <option value="Laki-Laki" @if($teacher->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if($teacher->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            </select>
        </div>
        @error('jenis_kelamin')
        <div class="invalid-feedback mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal lahir</label>
        <div class="col-sm-10">
            <input type="text" value="{{ old('tanggal_lahir') ?? $teacher->tanggal_lahir }}" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror">
        </div>
        @error('tanggal_lahir')
        <div class="text-danger mt-3">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" value="{{ old('email') ?? $teacher->user->email }}" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
        </div>
        @error('email')
        <div class="text-danger mt-3">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') ?? $teacher->alamat }}</textarea>
        </div>
        @error('alamat')
        <div class="invalid-feedback mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-10">
            <input type="text" value="{{ old('jabatan') ?? $teacher->jabatan }}" name="jabatan" id="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
        </div>
        @error('jabatan')
        <div class="text-danger mt-3">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
        <div class="col-sm-10">
            <input type="text" value="{{ old('pendidikan') ?? $teacher->pendidikan }}" name="pendidikan" id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror">
        </div>
        @error('pendidikan')
        <div class="text-danger mt-3">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="no_handphone" class="col-sm-2 col-form-label">Nomor Handphone</label>
        <div class="col-sm-10">
            <input type="text" value="{{ old('no_handphone') ?? $teacher->no_handphone }}" name="no_handphone" id="no_handphone" class="form-control @error('no_handphone') is-invalid @enderror">
        </div>
        @error('no_handphone')
        <div class="text-danger mt-3">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="avatar" class="col-sm-2 col-form-label">Gambar Avatar</label>
        <input type="file" name="avatar" id="avatar">
        @error('avatar')
        <div class="text-danger mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <br>
        <a href="/teacher/changePassword/{{ $teacher->id }}" class="btn btn-warning">Ubah Password</a>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>
</form>