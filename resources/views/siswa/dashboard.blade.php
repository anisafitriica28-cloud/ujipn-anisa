@extends('siswa.layouts.templates')

@section('content')
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
        <a href="{{ route('siswa.tambah-aspirasi') }}" class="btn-aspirasi">+ Ajukan Aspirasi</a>

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
@endsection