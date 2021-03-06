<!DOCTYPE html>
<html>
<head>
	<title>Konfirmasi Pembayaran- Admin</title>
    <link rel="icon" href="<?= base_url('assets/favicon.png') ?>" type="image/png">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/datatables.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/datatables-b4.css') ?>">
</head>
<body>
	<?php include 'include/nav.php'; ?>

	<div class="container-fluid my-4">
        <h3 class="text-center">Daftar Pelanggan Yang Mengirim Bukti Pembayaran</h3>
        <div class="container">
        <h6 class="">Hapus Semua Data</h6>
        <a onclick='return confirm("Yakin Ingin Menghapus Semua Data? ")' href="<?= base_url('hapus/semua/peserta') ?>" class="btn btn-danger">Hapus</a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered datatables">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th width="20%">Bukti Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $li): ?>
                            <tr>
                                <td><?= $li->nama ?></td>
                                <td><?= $li->nim ?></td>
                                <td><?= $li->no_hp ?></td>
                                <td><?= $li->email ?></td>
                                <td><?= $li->jurusan ?></td>
                                <td>
                                    <a href="<?= base_url('assets/bukti/'.$li->gambar) ?>" target="_blank">
                                        <img width="50%" src="<?= base_url('assets/bukti/'.$li->gambar) ?>" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a onclick='return confirm("Yakin Ingin Verfikasi No Pembayaran <?= $li->kode ?> ? ")' href="<?= base_url('admin/verifikasiPembayaran/'.$li->kode) ?>" class="btn btn-success">Verifikasi</a>
                                    <a onclick='return confirm("Yakin Ingin Menghapus Peserta <?= $li->kode ?> ? ")' href="<?= base_url('admin/hapusPeserta/'.$li->kode) ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>

    <div class="container-fluid my-4">
        <h3 class="text-center">Daftar Pelanggan Yang teverifikasi</h3>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered datatables">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th width="20%">Bukti Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list1 as $li): ?>
                            <tr>
                                <td><?= $li->nama ?></td>
                                <td><?= $li->nim ?></td>
                                <td><?= $li->no_hp ?></td>
                                <td><?= $li->email ?></td>
                                <td><?= $li->jurusan ?></td>
                                <td>
                                    <a href="<?= base_url('assets/bukti/'.$li->gambar) ?>" target="_blank">
                                        <img width="50%" src="<?= base_url('assets/bukti/'.$li->gambar) ?>" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a onclick='return confirm("Yakin Ingin Menghapus Peserta <?= $li->kode ?> ? ")' href="<?= base_url('admin/hapusPeserta/'.$li->kode) ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/datatables.js') ?>"></script>
	<script src="<?= base_url('assets/js/datatables-b4.js') ?>"></script>
	<?php include 'include/datatables.php'; ?>
</body>
</html>