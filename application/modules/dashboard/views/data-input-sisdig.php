<!-- FORM NAMA MULAI -->
<div class="form-group">
    <label for="namabarang_sisdig">
        Nama Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="namabarang_sisdig" type="text">
    <?php echo $this->input->post('namabarang_sisdig'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('namabarang_sisdig'); ?></span>
</div>
<!-- FORM NAMA BUYAR -->
<!-- FORM jumlah barang MULAI -->
<div class="form-group">
    <label for="jumlahbarang_sisdig">
        Jumlah Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="jumlahbarang_sisdig" type="text">
    <?php echo $this->input->post('jumlahbarang_sisdig'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('jumlahbarang_sisdig'); ?></span>
</div>
<!-- FORM jumlah barang BUYAR -->

<!-- FORM satuan barang MULAI -->
<div class="form-group">
    <label for="satuanbarang_sisdig">
        Satuan Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="satuanbarang_sisdig" type="text">
    <?php echo $this->input->post('satuanbarang_sisdig'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('satuanbarang_sisdig'); ?></span>
</div>
<!-- FORM satuan barang BUYAR -->

<!-- FORM TANGGAL update MULAI -->
<div class="form-group">
    <label for="tanggalupdate_sisdig">
        Tanggal Update
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="tanggalupdate_sisdig" type="date">
    <?php echo $this->input->post('tanggalupdate_sisdig'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('tanggalupdate_sisdig'); ?></span>
</div>
<!-- FORM TANGGAL update BUYAR -->
<!-- FORM kondisi barang MULAI -->
<div class="form-group">
    <label for="kondisi_sisdig">
        Kondisi Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="kondisi_sisdig" type="text">
    <?php echo $this->input->post('kondisi_sisdig'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('kondisi_sisdig'); ?></span>
</div>
<!-- FORM kondisi barang BUYAR -->
<div class="border-top">
    <div class="card-body">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
    </div>
</div>