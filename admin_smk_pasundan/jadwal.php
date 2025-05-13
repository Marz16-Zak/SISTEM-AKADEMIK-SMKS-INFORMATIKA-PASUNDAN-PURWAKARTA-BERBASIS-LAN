<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Pelajaran - SMKS Informatika Pasundan Purwakarta</title>
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
            color:rgb(3, 128, 254);
        }

        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Jadwal Pelajaran - SMKS Informatika Pasundan Purwakarta</h1>
    </header>

    <div class="container">
        <a href="#" class="add-btn">+ Tambah Jadwal</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Kelas</th>
                    <th>Mata Pelajaran</th>
                    <th>Guru</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data sementara -->
                <tr>
                    <td>1</td>
                    <td>Senin</td>
                    <td>07.00 - 08.30</td>
                    <td>X RPL</td>
                    <td>Matematika</td>
                    <td>Ahmad Santoso</td>
                    <td class="actions">
                        <a href="#">Edit</a>
                        <a href="#">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Selasa</td>
                    <td>09.00 - 10.30</td>
                    <td>XI TKJ</td>
                    <td>Bahasa Inggris</td>
                    <td>Sri Wahyuni</td>
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
