<!DOCTYPE html> 
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - SMKS Informatika Pasundan Purwakarta</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #e9f5f2;
            color:rgb(4, 124, 245);
        }

        header {
            background-color:rgb(4, 124, 245);
            padding: 20px;
            color: white;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            padding: 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            text-align: center;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }

        .card a {
            text-decoration: none;
            color:rgb(6, 6, 6);
            font-weight: bold;
            font-size: 18px;
        }

        .icon {
            font-size: 40px;
            margin-bottom: 10px;
            color:rgb(4, 135, 249);
        }
    </style>
</head>
<body>

    <header>
        <h1>Sistem Akademik</h1>
        <p>SMKS Informatika Pasundan Purwakarta</p>
    </header>

    <div class="container">
        <div class="grid">
            <div class="card">
                <div class="icon">👨‍🏫</div>
                <a href="guru.php">Data Guru</a>
            </div>
            <div class="card">
                <div class="icon">👨‍🎓</div>
                <a href="siswa.php">Data Siswa</a>
            </div>
            <div class="card">
                <div class="icon">📆</div>
                <a href="jadwal.php">Jadwal Pelajaran</a>
            </div>
            <div class="card">
                <div class="icon">📊</div>
                <a href="nilai.php">Nilai Siswa</a>
            </div>
            <div class="card">
                <div class="icon">📋</div>
                <a href="absensi.php">Absensi</a>
            </div>
            <div class="card">
                <div class="icon">📁</div>
                <a href="laporan.php">Laporan Akademik</a>
            </div>
        </div>
    </div>

</body>
</html>
