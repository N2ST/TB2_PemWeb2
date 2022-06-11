<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style>
        body {
            font-family: sans-serif !important;
        }

        table.table-detail,
        .table-detail th,
        .table-detail td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        table.table-top,
        .table-top th,
        .table-top td {
            padding-right: 10px;
            padding-left: 0;
        }

        .table-top {
            padding-top: 10px;
            padding-bottom: 3px;
        }

        ol {
            padding: 0 0 0 25px;
        }
    </style>
    <h2> Data Mahasiswa</h2>

    <table class="table-top">
        <tr>

            <td><b>Nama Mahasiswa</b> : <?= $cv->nama ?></td>
            <br></br>
            <td><b>Tanggal Lahir</b> : <?= $cv->tanggal_lahir ?></td>
            <br></br>
            <td><b>Kontak Email</b> : <?= $cv->email ?>
            </td><br></br>
        </tr>
    </table>
    <b style="padding-left: 2px; padding-bottom:4px; display:block;">Detail:</b>
    <table width="100%" cellspacing="0" class="table-detail">
        <thead>
            <tr>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Hobi</th>
                <th>Nama Pendidikan</th>
                <th>Tempat Pendidikan</th>
                <th>Waktu Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $cv->alamat ?></td>
                <td><?= $cv->jenis_kelamin ?></td>
                <td><?= $cv->agama ?></td>
                <td><?= $cv->hobi ?></td>
                <td><?= $cv->nama_pendidikan ?></td>
                <td><?= $cv->tempat_pendidikan ?></td>
                <td><?= $cv->waktu_pendidikan ?></td>

            </tr>

        </tbody>
    </table>
    <hr />
</body>

</html>