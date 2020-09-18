<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->is('beranda/admin') ? 'active' : '' }}">
                <a class="nav-link" href="/beranda/admin">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item{{ request()->is('berita') ? ' active' : '' }}">
                <a class="nav-link" href="/berita/{slug}">Berita</a>
            </li>
            <li class="nav-item{{ request()->is('siswa') ? ' active' : '' }}">
                <a class="nav-link" href="/siswa">Daftar Siswa</a>
            </li>
            <li class="nav-item{{ request()->is('nilai') ? ' active' : '' }}">
                <a class="nav-link" href="/nilai">Nilai Siswa</a>
            </li>
        </ul>
    </div>
</nav>