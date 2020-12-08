<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Nilai Mata Pelajaran</h3>
                <div class="card-tools">
                    @canany(['isTeacher', 'isAdmin'])
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahnilai">
                        Tambah Nilai
                    </button>
                    @endcanany
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
                            @can('isTeacher')
                            <th>AKSI</th>
                            @elsecan('isAdmin')
                            <th>AKSI</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($student->courses as $course)
                        <tr>
                            <td>{{ $course->kode }}</td>
                            <td>{{ $course->nama }}</td>
                            <td><span class="tag tag-success">{{ $course->semester }}</span></td>
                            @can('isTeacher')
                            <td><a href="#" class="nilai @error('nilai') is-invalid @enderror" data-type="text" data-pk="{{$course->id}}" data-url="/api/student/{{$student->id}}/editnilai" data-title="Masukkan Nilai">{{$course->pivot->nilai}}
                                </a>
                            </td>
                            @elsecan('isAdmin')
                            <td><a href="#" class="nilai @error('nilai') is-invalid @enderror" data-type="text" data-pk="{{$course->id}}" data-url="/api/student/{{$student->id}}/editnilai" data-title="Masukkan Nilai">{{$course->pivot->nilai}}
                                </a>
                            </td>
                            @else
                            <td>{{$course->pivot->nilai}}</td>
                            @endcan
                            @can('isTeacher')
                            <td>
                                <a href="/student/{{$student->id}}/{{$course->id}}/deletenilai" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                            </td>
                            @elsecan('isAdmin')
                            <td>
                                <a href="/student/{{$student->id}}/{{$course->id}}/deletenilai" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                            </td>
                            @endcan
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