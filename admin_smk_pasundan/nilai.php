<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nilai Siswa - SMKS Informatika Pasundan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f4f6f8;
        }

        header {
            background-color: #2c3e50;
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
            background-color: #3498db;
            color: white;
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
        <h1>Nilai Siswa - SMKS Informatika Pasundan</h1>
    </header>

    <div class="container">
        <a href="#" class="add-btn">+ Tambah Nilai</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                    <th>Predikat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data -->
                <tr>
                    <td>1</td>
                    <td>20231001</td>
                    <td>Rian Maulana</td>
                    <td>X RPL</td>
                    <td>Matematika</td>
                    <td>88</td>
                    <td>B+</td>
                    <td class="actions">
                        <a href="#">Edit</a>
                        <a href="#">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>20231002</td>
                    <td>Putri Aulia</td>
                    <td>XI TKJ</td>
                    <td>Bahasa Inggris</td>
                    <td>92</td>
                    <td>A</td>
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
