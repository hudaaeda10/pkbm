<form class="form-horizontal" action="/student/{{ $student->id}}/update/student" method="post" role="form" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="form-group row">
        <label for="nama_depan" class="col-sm-2 col-form-label">Nama Depan</label>
        <div class="col-sm-10">
            <input type="text" value="{{ old('nama_depan') ?? $student->nama_depan }}" name="nama_depan" id="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror">
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
            <input type="text" value="{{ old('nama_belakang') ?? $student->nama_belakang }}" name="nama_belakang" id="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror">
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
                <option value="Laki-Laki" @if($student->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if($student->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            </select>
        </div>
        @error('jenis_kelamin')
        <div class="invalid-feedback mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-10">
            <input type="text" value="{{ old('pekerjaan') ?? $student->pekerjaan }}" name="pekerjaan" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror">
        </div>
        @error('pekerjaan')
        <div class="text-danger mt-3">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" value="{{ old('email') ?? $student->user->email }}" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
        </div>
        @error('email')
        <div class="text-danger mt-3">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') ?? $student->alamat }}</textarea>
        </div>
        @error('alamat')
        <div class="invalid-feedback mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="inputName2" class="col-sm-2 col-form-label">Pilih Kelas Paket</label>
        <div class="col-sm-10">
            <select name="kelas_paket" id="kelas_paket" class="form-control @error('kelas_paket') is-invalid @enderror">
                <option value="A" @if($student->kelas_paket == 'A') selected @endif>Paket A</option>
                <option value="B" @if($student->kelas_paket == 'B') selected @endif>Paket B</option>
                <option value="C" @if($student->kelas_paket == 'C') selected @endif>Paket C</option>
            </select>
        </div>
        @error('kelas_paket')<div class="invalid-feedback mt-2">
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
        <a href="/student/changePassword/{{ $student->id }}" class="btn btn-warning">Ubah Password</a>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>
</form>