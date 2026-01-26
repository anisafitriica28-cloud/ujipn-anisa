<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"></i class="fa fa-house"></i> Dashboard</a></li>
            <li><a href=""><i class="fa-solid fa-users"></i> Kelola Siswa</a></li>
            <li><a href=""><i class="fa-solid fa-tags"></i> Kelola Kategori</a></li>
            <li><a href=""><i class="fa-solid fa-inbox"></i> Aspirasi</a></li>
            <li><a href=""><i class="fa-solid fa-file-lines"></i> laporan</a></li>
        </ul>
    </aside>

    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <div class="topbar">
            <div class="title">
                <i class="fa fa-bars"></i>
                Dashboard Admin
            </div>
            <div class="user-menu">
                <div class="user-triger" onclick="toggleDropdown()">
                    <i class="fa-solid fa-user-circle"></i>
                    <span>{{ auth()->user()->username }}</span>
                    <i class="fa-solid fa-caret-down"></i>
                </div>

                <div class="dropdown" id="userDropdown">
                    <a href="/profil">
                    <i class="fa fa-user"></i> Profile
                    </a>

                <form action="{{ route('logout') }}" method="POST">
                     @csrf
                        <button type="submit">
                        <i class="fa fa-right-from-bracket"></i> Logout
                        </button>
                </form>
            </div>
            </div>
        </div>

        <!-- CARDS -->
        <section class="cards">
            <div class="card blue">
                <p>Total Aspirasi</p>
                <h2>120</h2>
            </div>
            <div class="card orange">
                <p>Aspirasi Baru</p>
                <h2>30</h2>
            </div>
            <div class="card dark">
                <p>Diproses</p>
                <h2>15</h2>
            </div>
        </section>

        <!-- TABLE 1 -->
        <section class="table-box">
            <h3>Daftar Aspirasi</h3>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lampu Kelas Rusak</td>
                        <td>Kebersihan</td>
                        <td>2024-04-20</td>
                        <td><span class="status proses">Diproses</span></td>
                    </tr>
                    <tr>
                        <td>Kebersihan Toilet</td>
                        <td>Fasilitas</td>
                        <td>2024-04-18</td>
                        <td><span class="status baru">Baru</span></td>
                    </tr>
                    <tr>
                        <td>Rak Buku Perpustakaan</td>
                        <td>Fasilitas</td>
                        <td>2024-04-15</td>
                        <td><span class="status selesai">Selesai</span></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</div>
    <script>
function toggleDropdown() {
    const dropdown = document.getElementById("userDropdown");
    dropdown.classList.toggle("show");
}
</script>
</body>
</html>