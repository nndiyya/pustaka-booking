<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 10px 10px 10px;
        }
    </style>
    <h3>
        <center>Laporan Data Anggota Perpustakaan Online</center>
    </h3>
    <br>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($anggota as $ag) {
            ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $ag['nama']; ?></td>
                    <td><?= $ag['email']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>