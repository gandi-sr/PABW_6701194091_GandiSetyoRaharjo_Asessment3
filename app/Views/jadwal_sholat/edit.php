<?php echo $this->extend('layout/template') ?>

<?php echo $this->section('content') ?>

<section id="features" class="features mt-5" data-aos="fade-up">
    <div class="container">
        <div class="row content justify-content-center" style="min-height:480px;">
            <div class="col-md-12 mt-5 mb-5 pb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-header">
                        <?php echo $title; ?>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('jadwal_sholat/update') ?>" method="post" accept-charset="utf-8">

                            <?php if (isset($validation)) : ?>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger">
                                            <?php echo $validation->listErrors(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="form-group row">
                                <label class="col-md-3" for="bulan">
                                    bulan
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="bulan" id="bulan" placeholder="input bulan" class="form-control" value="<?php echo set_value('bulan'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="tanggal">
                                    tanggal;
                                </label>
                                <div class="col-md-5">
                                    <input type="date" name="tanggal" id="tanggal" placeholder="input tanggal" class="form-control" value="<?php echo set_value('tanggal'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="subuh">
                                    subuh
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="subuh" id="subuh" placeholder="input" class="form-control" value="<?php echo set_value('subuh'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="terbit">
                                    terbit
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="terbit" id="terbit" placeholder="input" class="form-control" value="<?php echo set_value('terbit'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="duha">
                                    duha
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="duha" id="bulan" placeholder="bulan" class="form-control" value="<?php echo set_value('duha'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="dzuhur">
                                    dzuhur
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="dzuhur" id="dzuhur" placeholder="input" class="form-control" value="<?php echo set_value('dzuhur'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="asar">
                                    asar
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="asar" id="asar" placeholder="input" class="form-control" value="<?php echo set_value('asar'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="magrib">
                                    magrib
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="magrib" id="magrib" placeholder="input" class="form-control" value="<?php echo set_value('magrib'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="isya">
                                    isya
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="isya" id="isya" placeholder="input" class="form-control" value="<?php echo set_value('isya'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">
                                    &nbsp;
                                </label>
                                <div class="col-md-5">
                                    <input type="hidden" name="id" value="<?php echo $edit['id']; ?>">

                                    <button type="submit" class="btn btn-primary">
                                        <i class="bx bx-save"></i> Simpan
                                    </button>
                                    <a href="<?php echo base_url('jadwal_sholat'); ?>" class="btn btn-dark">
                                        <i class="bx bx-reply"></i> Batal
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php echo $this->endSection(); ?>