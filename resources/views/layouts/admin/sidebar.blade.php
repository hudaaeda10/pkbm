<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="/admin/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <?php
    if (Auth::user()->role == 'student') {
        $user = \App\Student::where('user_id', Auth::user()->id)->first();
    } elseif (Auth::user()->role == 'teacher') {
        $user = \App\Teacher::where('user_id', Auth::user()->id)->first();
    } else {
        $user = \App\User::where('id', Auth::user()->id)->first();
    }
    ?>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(empty($user->avatar))
                <img src="/admin/img/default-user.png" class="img-circle elevation-2" alt="User Image">
                @else
                <img src="{{ $user->getAvatar() }}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                @if(Auth::user()->role == 'teacher')
                <a href="/teacher/{{$user->id}}/profile" class="d-block">{{Auth::user()->name}}</a>
                @elseif(Auth::user()->role == 'student')
                <a href="/student/{{$user->id}}/tampil" class="d-block">{{Auth::user()->name}}</a>
                @else
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
                @endif
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="/adminlte" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                @can('isAdmin')
                <li class="nav-item">
                    <a href="/user" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
                @endcan

                @canany(['isAdmin', 'isCreator'])
                <li class="nav-header">KONTEN</li>

                <li class="nav-item">
                    <a href="/article" class="nav-link">
                        <i class="far fa-newspaper nav-icon"></i>
                        <p>Artikel</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/photo" class="nav-link">
                        <i class="far fa-images nav-icon"></i>
                        <p>Foto PKBM</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/video" class="nav-link">
                        <i class="fab fa-youtube nav-icon"></i>
                        <p>Video PKBM</p>
                    </a>
                </li>
                @endcanany

                @canany(['isAdmin', 'isTeacher'])
                <li class="nav-header">DATA ANGGOTA PKBM</li>

                <li class="nav-item">
                    <a href="/admin/students" class="nav-link">
                        <i class="fas fa-user-graduate nav-icon"></i>
                        <p>DATA SISWA & NILAI</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/teachers" class="nav-link">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>DATA GURU</p>
                    </a>
                </li>
                @endcanany
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>