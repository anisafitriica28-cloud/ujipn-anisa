<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li class="active"><i class="fa fa-house"></i> Dashboard</li>
            <li><i class="fa fa-message"></i> Aspirasi</li>
            <li><i class="fa fa-user"></i> Profil</li>
        </ul>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main">

        <!-- TOPBAR -->
        <div class="topbar">
            <div class="title">
                <i class="fa fa-bars"></i>
                Dashboard Siswa
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
        <h2 style="text-align: center; color: #333E5D; margin-bottom: 20px;">Selamat Datang
            <span>{{ auth()->user()->nama }} ({{ auth()->user()->siswa->kelas }})</span>
        </h2>
        <!-- CARDS -->
        <div class="cards">
            <div class="card blue">
                <p>Total Aspirasi</p>
                <h2>{{ $total_aspirasi }}</h2>
            </div>
            <div class="card orange">
                <p>Menunggu</p>
                <h2>{{ $aspirasi_menunggu }}</h2>
            </div>
            <div class="card blue">
                <p>Diproses</p>
                <h2>{{ $aspirasi_diproses }}</h2>
            </div>
            <div class="card blue">
                <p>Selesai</p>
                <h2>{{ $aspirasi_selesai }}</h2>
            </div>
        </div>

        <!-- BUTTON -->
        <button class="btn">+ Ajukan Aspirasi</button>

        <!-- TABLE -->
        <div class="table-box">
            <h3>Riwayat Aspirasi</h3>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Detail Pesan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aspirasi as $item )
                    
                        <tr>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->kategori->nama_kategori }}</td>
                            <td>{{ $item->isi }}</td>
                            <td>{{ $item->created_at->format('d-M-Y') }}</td>
                            <td><span class="status {{ $item->status }}" style="text-transform: capitalize;">{{ $item->status }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
    <script>
function toggleDropdown() {
    const dropdown = document.getElementById("userDropdown");
    dropdown.classList.toggle("show");
}
</script>
</body>
</html>