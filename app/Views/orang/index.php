<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Daftar Orang</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    <input type="text" class="form-control" placeholder="masukkan keyword pencarian.." name="keyword" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                </thead>
                <tbody>
                    <!-- ubah jumlah halaman di controller harus ubah disini juga -->
                    <?php $i = 1 + (10 * ($currentPage - 1)) ?>
                    <?php foreach ($orang as $o) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $o['nama']; ?></td>
                            <td><?= $o['alamat'] ?></td>
                            <td>
                                <a href="" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <?= $pager->links('orang', 'orang_pagination'); ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>