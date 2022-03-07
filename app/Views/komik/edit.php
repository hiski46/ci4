<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Komik</h2>

            <form action="/Komik/update/<?= $komik['id']; ?>" method="post" class="" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" id="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul') ?>
                        </div>
                    </div>
                </div>
                <!-- slug -->
                <input type="hidden" class="form-control" name="slug" id="slug" value="<?= $komik['slug']; ?>">
                <input type="hidden" class="form-control" name="sampulLama" value="<?= $komik['sampul']; ?>">

                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penulis" id="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit']; ?>">
                    </div>
                </div>
                <div class="from-group row mb-3">
                    <label class="col-sm-2 col-form-label " for="sampul">Sampul</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8 ">
                        <input type="file" class="img-preview form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" name="sampul" id="sampul" onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('sampul') ?>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>