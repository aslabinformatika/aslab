                                    <!-- FORM ID MULAI -->
                                        <div class="form-group">
                                            <label for="id_asisten">
                                            ID Asisten
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="id_asisten" type="text" min="4">
                                                <?php echo $this->input->post('id_asisten'); ?>
                                            </input>
                                            <span class="text-danger"><?php echo form_error('id_asisten');?></span>
                                        </div>
                                    <!-- FORM ID BUYAR -->
                                    <!-- FORM NAMA MULAI -->
                                        <div class="form-group">
                                            <label for="nama_asisten">
                                                Nama Lengkap
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="nama_asisten" type="text">
                                                <?php echo $this->input->post('nama_asisten'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('nama_asisten');?></span>
                                        </div>
                                    <!-- FORM NAMA BUYAR -->
                                    <!-- FORM PASSWORD MULAI -->
                                        <div class="form-group">
                                            <label for="password_asisten">
                                                Password
                                                <span class="text-danger">*</span>
                                                </label>
                                            <input class="form-control" name="password_asisten" type="password">
                                                <?php echo $this->input->post('password_asisten'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('password_asisten');?></span>
                                        </div>
                                    <!-- FORM PASSWORD BUYAR -->
                                    <!-- FORM NIM MULAI -->
                                        <div class="form-group">
                                            <label for="nim_asisten">
                                                Nomer Induk Mahasiswa
                                                    <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="nim_asisten" type="text">
                                                <?php echo $this->input->post('nim_asisten'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('nim_asisten');?></span>
                                        </div>
                                    <!-- FORM NIM BUYAR -->
                                    <!-- FORM ANGKATAN MULAI -->
                                        <div class="form-group">
                                            <label for="angkatan_asisten">
                                                Angkatan
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <select name="angkatan_asisten" class="form-control">
                                                    <option>.. Masukkan Pilihan ..</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                </select>
                                        </div>
                                    <!-- FORM ANGKATAN BUYAR -->
                                    <!-- FORM ALAMAT MULAI -->
                                        <div class="form-group">
                                            <label for="alamat_asisten">
                                                Alamat Lengkap
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <input name="alamat_asisten" class="form-control" type="text">
                                                    <?php echo $this->input->post('alamat_asisten'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('alamat_asisten');?></span>
                                        </div>
                                    <!-- FORM ALAMAT BUYAR -->
                                    <!-- FORM TANGGAL LAHIR MULAI -->
                                        <div class="form-group">
                                            <label for="ttl_asisten">
                                                Tanggal Lahir
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <input class="form-control" name="ttl_asisten" type="date">
                                                    <?php echo $this->input->post('ttl_asisten'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('ttl_asisten');?></span>
                                        </div>
                                    <!-- FORM TANGGAL LAHIR BUYAR -->
                                    <!-- FORM EMAIL MULAI -->
                                        <div class="form-group">
                                            <label for="email_asisten">
                                                Email
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <input class="form-control" name="email_asisten" type="email">
                                                    <?php echo $this->input->post('email_asisten'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('email_asisten');?></span>
                                        </div>
                                    <!-- FORM EMAIL BUYAR -->
                                    <!-- FORM NO TELP MULAI -->
                                        <div class="form-group">
                                            <label for="notelp_asisten">
                                                No Telp
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <input class="form-control" name="notelp_asisten" type="text">
                                                    <?php echo $this->input->post('notelp_asisten'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('notelp_asisten');?></span>
                                        </div>
                                    <!-- FORM NO TELP BUYAR -->
                                    <!-- FORM INSTAGRAM MULAI -->
                                        <div class="form-group">
                                            <label for="instagram_asisten">
                                                Link Instagram
                                                    <!-- <span class="text-danger">*</span> -->
                                            </label>
                                                <input class="form-control" name="instagram_asisten" type="text">
                                                    <?php echo $this->input->post('instagram_asisten'); ?>
                                                </input>
                                                <span class="text-danger"><?php echo form_error('instagram_asisten');?></span>
                                        </div>
                                    <!-- FORM INSTAGRAM BUYAR -->
                                    <!-- FORM LEVEL MULAI -->
                                        <div class="form-group">
                                            <label for="level">
                                                Level User
                                                    <span class="text-danger">*</span><br>
                                                    <small>1 = Struktural<br>2 = Anggota</small>
                                            </label>
                                                <select name="level" class="form-control">
                                                    <option>.. Masukkan Pilihan ..</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                        </div>
                                    <!-- FORM LEVEL BUYAR -->
                                        <div class="border-top">
                                            <div class="card-body">
                                                <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
                                                    <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
                                            </div>
                                        </div>