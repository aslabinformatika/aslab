<!-- FORM NAMA MULAI -->
<div class="form-group">
    <label for="namabarang_pbo">
        Nama Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="namabarang_pbo" type="text">
    <?php echo $this->input->post('namabarang_pbo'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('namabarang_pbo'); ?></span>
</div>
<!-- FORM NAMA BUYAR -->
<!-- FORM jumlah barang MULAI -->
<div class="form-group">
    <label for="jumlahbarang_pbo">
        Jumlah Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="jumlahbarang_pbo" type="text">
    <?php echo $this->input->post('jumlahbarang_pbo'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('jumlahbarang_pbo'); ?></span>
</div>
<!-- FORM jumlah barang BUYAR -->

<!-- FORM satuan barang MULAI -->
<div class="form-group">
    <label for="satuanbarang_pbo">
        Satuan Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="satuanbarang_pbo" type="text">
    <?php echo $this->input->post('satuanbarang_pbo'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('satuanbarang_pbo'); ?></span>
</div>
<!-- FORM satuan barang BUYAR -->

<!-- FORM TANGGAL update MULAI -->
<div class="form-group">
    <label for="tanggalupdate_pbo">
        Tanggal Update
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="tanggalupdate_pbo" type="date">
    <?php echo $this->input->post('tanggalupdate_pbo'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('tanggalupdate_pbo'); ?></span>
</div>
<!-- FORM TANGGAL update BUYAR -->
<!-- FORM kondisi barang MULAI -->
<div class="form-group">
    <label for="kondisi_pbo">
        Kondisi Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="kondisi_pbo" type="text">
    <?php echo $this->input->post('kondisi_pbo'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('kondisi_pbo'); ?></span>
</div>
<!-- FORM kondisi barang BUYAR -->
<div class="border-top">
    <div class="card-body">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
    </div>
</div>