<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo_LPM.png') }}" alt="LPM Logo" style="height: 50px;">
        </a>
        
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'text-success' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('masyarakat') ? 'text-success' : '' }}" href="/masyarakat">Data Masyarakat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tambah') ? 'text-success' : '' }}" href="/tambah">Tambah Data</a>
                </li>
            </ul>
        </div>
        
        <a class="nav-link" href="/actionlogout">Logout</a>
    </div>
</nav>
