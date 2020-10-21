<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Nilai Mata Pelajaran</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 300px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="button-group input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahnilai">
                                Tambah Nilai
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>KODE</th>
                            <th>MATA PELAJARAN</th>
                            <th>SEMESTER</th>
                            <th>NILAI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($student->courses as $course)
                        <tr>
                            <td>{{ $course->kode }}</td>
                            <td>{{ $course->nama }}</td>
                            <td><span class="tag tag-success">{{ $course->semester }}</span></td>
                            <td><a href="#" class="nilai @error('nilai') is-invalid @enderror" data-type="text" data-pk="{{$course->id}}" data-url="/api/student/{{$student->id}}/editnilai" data-title="Masukkan Nilai">{{$course->pivot->nilai}}
                                </a>
                            </td>
                            <td>
                                <a href="/student/{{$student->id}}/{{$course->id}}/deletenilai" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>