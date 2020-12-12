<!-- FORM NAMA MULAI -->
<div class="form-group">
    <label for="namabarang_rpl">
        Nama Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="namabarang_rpl" type="text">
    <?php echo $this->input->post('namabarang_rpl'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('namabarang_rpl'); ?></span>
</div>
<!-- FORM NAMA BUYAR -->
<!-- FORM jumlah barang MULAI -->
<div class="form-group">
    <label for="jumlahbarang_rpl">
        Jumlah Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="jumlahbarang_rpl" type="text">
    <?php echo $this->input->post('jumlahbarang_rpl'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('jumlahbarang_rpl'); ?></span>
</div>
<!-- FORM jumlah barang BUYAR -->

<!-- FORM satuan barang MULAI -->
<div class="form-group">
    <label for="satuanbarang_rpl">
        Satuan Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="satuanbarang_rpl" type="text">
    <?php echo $this->input->post('satuanbarang_rpl'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('satuanbarang_rpl'); ?></span>
</div>
<!-- FORM satuan barang BUYAR -->

<!-- FORM TANGGAL update MULAI -->
<div class="form-group">
    <label for="tanggalupdate_rpl">
        Tanggal Update
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="tanggalupdate_rpl" type="date">
    <?php echo $this->input->post('tanggalupdate_rpl'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('tanggalupdate_rpl'); ?></span>
</div>
<!-- FORM TANGGAL update BUYAR -->
<!-- FORM kondisi barang MULAI -->
<div class="form-group">
    <label for="kondisi_rpl">
        Kondisi Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="kondisi_rpl" type="text">
    <?php echo $this->input->post('kondisi_rpl'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('kondisi_rpl'); ?></span>
</div>
<!-- FORM kondisi barang BUYAR -->
<div class="border-top">
    <div class="card-body">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
    </div>
</div>