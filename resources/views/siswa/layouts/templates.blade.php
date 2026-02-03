<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa</title>
    <link rel="stylesheet"href="/css/dashboard.css">
    <link rel="stylesheet"href="/vendor/fontawesome/css/all.css">
    <link rel="stylesheet"href="/vendor/bootstrap/css/bootstrap.min.css">
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

    @yield('content')

    <div class="main-content">
         <!-- MAIN CONTENT -->
   
   

    </div>
</div>
    <script>
function toggleDropdown() {
    const dropdown = document.getElementById("userDropdown");
    dropdown.classList.toggle("show");
}
</script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>