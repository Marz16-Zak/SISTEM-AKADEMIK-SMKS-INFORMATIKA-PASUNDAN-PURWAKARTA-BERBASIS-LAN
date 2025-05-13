<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Akademik - SMKS Informatika Pasundan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f4f6f8;
        }

        header {
            background-color:rgb(3, 128, 254);
            padding: 20px;
            color: white;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 24px;
        }

        .container {
            padding: 20px;
        }

        .export-btn {
            display: inline-block;
            background-color: #e67e22;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .export-btn:hover {
            background-color: #d35400;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        table th, table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color:rgb(3, 128, 254);
            color: white;
        }

        .actions a {
            margin-right: 10px;
            text-decoration: none;
            color:rgb(3, 128, 254);
        }

        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>Laporan Akademik - SMKS Informatika Pasundan Purwakarta</h1>
    </header>

    <div class="container">
        <a href="#" class="export-btn">📄 Export PDF</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Rata-rata Nilai</th>
                    <th>Kehadiran</th>
                    <th>Predikat</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data -->
                <tr>
                    <td>1</td>
                    <td>17188016</td>
                    <td>Muhammad Abdul Rozak</td>
                    <td>XII TKJ</td>
                    <td>85.3</td>
                    <td>95%</td>
                    <td>B+</td>
                    <td>Disiplin dan aktif</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>16092034</td>
                    <td>De Putria Rahmalya</td>
                    <td>XI TKJ</td>
                    <td>91.7</td>
                    <td>98%</td>
                    <td>A</td>
                    <td>Sangat baik</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
