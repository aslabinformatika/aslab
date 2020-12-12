<!-- FORM NAMA MULAI -->
<div class="form-group">
    <label for="namabarang_algostruk">
        Nama Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="namabarang_algostruk" type="text">
    <?php echo $this->input->post('namabarang_algostruk'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('namabarang_algostruk'); ?></span>
</div>
<!-- FORM NAMA BUYAR -->
<!-- FORM jumlah barang MULAI -->
<div class="form-group">
    <label for="jumlahbarang_algostruk">
        Jumlah Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="jumlahbarang_algostruk" type="text">
    <?php echo $this->input->post('jumlahbarang_algostruk'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('jumlahbarang_algostruk'); ?></span>
</div>
<!-- FORM jumlah barang BUYAR -->

<!-- FORM satuan barang MULAI -->
<div class="form-group">
    <label for="satuanbarang_algostruk">
        Satuan Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="satuanbarang_algostruk" type="text">
    <?php echo $this->input->post('satuanbarang_algostruk'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('satuanbarang_algostruk'); ?></span>
</div>
<!-- FORM satuan barang BUYAR -->

<!-- FORM TANGGAL update MULAI -->
<div class="form-group">
    <label for="tanggalupdate_algostruk">
        Tanggal Update
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="tanggalupdate_algostruk" type="date">
    <?php echo $this->input->post('tanggalupdate_algostruk'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('tanggalupdate_algostruk'); ?></span>
</div>
<!-- FORM TANGGAL update BUYAR -->
<!-- FORM kondisi barang MULAI -->
<div class="form-group">
    <label for="kondisi_algostruk">
        Kondisi Barang
        <span class="text-danger">*</span>
    </label>
    <input class="form-control" name="kondisi_algostruk" type="text">
    <?php echo $this->input->post('kondisi_algostruk'); ?>
    </input>
    <span class="text-danger"><?php echo form_error('kondisi_algostruk'); ?></span>
</div>
<!-- FORM kondisi barang BUYAR -->
<div class="border-top">
    <div class="card-body">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
        <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
    </div>
</div>