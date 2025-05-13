<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa - SMKS Informatika Pasundan Purwakarta</title>
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

        .add-btn {
            display: inline-block;
            background-color: #2ecc71;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .add-btn:hover {
            background-color: #27ae60;
        }

        .actions a {
            margin-right: 10px;
            text-decoration: none;
            color: #3498db;
        }

        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Data Siswa - SMKS Informatika Pasundan Purwakarta</h1>
    </header>

    <div class="container">
        <a href="#" class="add-btn">+ Tambah Siswa</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Sementara -->
                <tr>
                    <td>1</td>
                    <td>17188016</td>
                    <td>Muhammad Abdul Rozak</td>
                    <td>XII TKJ</td>
                    <td>Tokyo,Jepang</td>
                    <td class="actions">
                        <a href="#">Edit</a>
                        <a href="#">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>16092034</td>
                    <td>De Putria Rahmalya </td>
                    <td>XII TKJ</td>
                    <td>Busan,Korea</td>
                    <td class="actions">
                        <a href="#">Edit</a>
                        <a href="#">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
