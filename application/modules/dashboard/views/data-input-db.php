<!-- FORM NAMA MULAI -->
<div class="form-group">
    <label for="namabarang_db">
        Nama Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="namabarang_db" type="text">
    <?php echo $this->input->post('namabarang_db'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('namabarang_db'); ?></span>
</div>
<!-- FORM NAMA BUYAR -->
<!-- FORM jumlah barang MULAI -->
<div class="form-group">
    <label for="jumlahbarang_db">
        Jumlah Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="jumlahbarang_db" type="text">
    <?php echo $this->input->post('jumlahbarang_db'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('jumlahbarang_db'); ?></span>
</div>
<!-- FORM jumlah barang BUYAR -->

<!-- FORM satuan barang MULAI -->
<div class="form-group">
    <label for="satuanbarang_db">
        Satuan Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="satuanbarang_db" type="text">
    <?php echo $this->input->post('satuanbarang_db'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('satuanbarang_db'); ?></span>
</div>
<!-- FORM satuan barang BUYAR -->

<!-- FORM TANGGAL update MULAI -->
<div class="form-group">
    <label for="tanggalupdate_db">
        Tanggal Update
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="tanggalupdate_db" type="date">
    <?php echo $this->input->post('tanggalupdate_db'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('tanggalupdate_db'); ?></span>
</div>
<!-- FORM TANGGAL update BUYAR -->
<!-- FORM kondisi barang MULAI -->
<div class="form-group">
    <label for="kondisi_db">
        Kondisi Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="kondisi_db" type="text">
    <?php echo $this->input->post('kondisi_db'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('kondisi_db'); ?></span>
</div>
<!-- FORM kondisi barang BUYAR -->
<div class="border-top">
    <div class="card-body">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
    </div>
</div>