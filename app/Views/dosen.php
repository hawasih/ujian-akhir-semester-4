<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        th {
            background-color: #343a40;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn {
            margin: 2px 0;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar Dosen</h2>
        <table id="dosenTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Dosen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($dosen) && is_array($dosen)) : ?>
                    <?php foreach ($dosen as $dosen_item) : ?>
                        <tr>
                            <td><?= esc($dosen_item['id']) ?></td>
                            <td><?= esc($dosen_item['nama_dosen']) ?></td>
                            <td>
                                <form action="<?= base_url('notifikasi/dosen-masuk/' . $dosen_item['id']) ?>" method="get" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin dosen ini hadir?');">
                                    <button type="submit" class="btn btn-primary btn-sm">HADIR</button>
                                </form>
                                <form action="<?= base_url('notifikasi/dosen-tidak-masuk/' . $dosen_item['id']) ?>" method="get" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin dosen ini tidak hadir?');">
                                    <button type="submit" class="btn btn-primary btn-sm">TIDAK HADIR</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="3" class="text-center">Tidak ada data dosen.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dosenTable').DataTable();
        });
    </script>
</body>
</html>
