<div class="container">
    <?php if ($this->session->flashdata('flash')) {
        $flash = $this->session->flashdata('flash');
    }else if($this->session->flashdata('flash2') ) {
        $flash = $this->session->flashdata('flash2');
    } ?>    

    <?php if ($this->session->flashData('flash') || $this->session->flashData('flash2') ) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data mahasiswa <strong>berhasil</strong> <?= $flash ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>c_mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <h3>Daftar Mahasiswa</h3>
        <div class="col-md-6">
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama'] ?>
                        <a href="<?=base_url();?>c_mahasiswa/hapus/<?=$mhs['id']?>" class="badge text-bg-danger float-end" onclick="return confirm('yakin?');">Hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>