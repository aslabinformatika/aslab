                                    <!-- FORM NIM MULAI -->
                                        <div class="form-group">
                                            <label for="nim_praktikum">
                                            NIM Mahasiswa
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="nim_praktikum" type="text" min="12">
                                                <?php echo set_value('nim_praktikum'); ?>
                                            </input>
                                            <span class="text-danger"><?php echo form_error('nim_praktikum');?></span>
                                        </div>
                                    <!-- FORM NIM BUYAR -->
                                    <!-- FORM NAMA MULAI -->
                                        <div class="form-group">
                                            <label for="nama_praktikan">
                                                Nama Mahasiswa
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="nama_praktikan">
                                            <?php echo $this->input->post('nama_praktikan'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('nama_praktikan');?></span>
                                        </div>
                                    <!-- FORM NAMA BUYAR -->
                                    <!-- FORM KELOMPOK MULAI -->
                                        <div class="form-group">
                                            <label for="kelompok_praktikum">
                                                Kelompok
                                                <span class="text-danger">*</span>
                                                </label>
                                            <input class="form-control" name="kelompok_praktikum" type="text">
                                            <?php echo $this->input->post('kelompok_praktikum'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('kelompok_praktikum');?></span>
                                        </div>
                                    <!-- FORM KELOMPOK BUYAR -->
                                    <!-- FORM LINK MULAI -->
                                        <div class="form-group">
                                            <label for="link_rangkuman">
                                                Link Rangkuman
                                                    <span class="text-danger">*</span>
                                                    <small><br>Tambahkan https:// didepan di ikuti link tanpa WWW</small>
                                            </label>
                                            <input class="form-control" name="link_rangkuman" type="url">
                                            <?php echo $this->input->post('link_rangkuman'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('link_rangkuman');?></span>
                                        </div>
                                    <!-- FORM ASISTEN FORM LINK BUYAR -->
                                    <!-- FORM ASISTEN MULAI -->
                                        <div class="form-group">
                                            <label for="nama_asisten">
                                                Nama Asisten
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <select name="nama_asisten" class="form-control">
                                                    <option value="">...</option>
                                                    <option value="Fatur Amirul M.">Fatur Amirul M.</option>
                                                    <option value="M. Amirulloh">M. Amirulloh</option>
                                                    <option value="Ailul Chowiyah">Ailul Chowiyah</option>
                                                    <option value="Rhamadina Fitrah Umami">Rhamadina Fitrah Umami</option>
                                                    <option value=""></option>

                                                    <option value="A131 Mohammad Aditio Putra F.">A131 Mohammad Aditio Putra F.</option>
                                                    <option value="A132 Haris Ahmad Gozali">A132 Haris Ahmad Gozali</option>
                                                    <option value="A133 M. Arsyil Adhi'im">A133 M. Arsyil Adhi'im</option>
                                                    <option value="A134 Alfian Ari Putra">A134 Alfian Ari Putra</option>
                                                    <option value="A135 Herlian Aliyasa Almaj Duddin">A135 Herlian Aliyasa Almaj Duddin</option>
                                                    <option value="A136 Dewangga Eka Putra">A136 Dewangga Eka Putra</option>
                                                    <option value="A137 Fitria Lailatul Kodriyah">A137 Fitria Lailatul Kodriyah</option>
                                                    <option value="A138 Dwi Lestari">A138 Dwi Lestari</option>
                                                    <option value="A139 Indah Fauzia">A139 Indah Fauzia</option>
                                                    <option value="A140 Arofatus Salis">A140 Arofatus Salis</option>
                                                    <option value="A141 Nasrudin Iqrok Mulloh">A141 Nasrudin Iqrok Mulloh</option>
                                                    <option value="A142 Ramadhani Sugyono">A142 Ramadhani Sugyono</option>
                                                    <option value=""></option>

                                                    <option value="A143 Achmad Ainun GR">A143 Achmad Ainun GR</option>
                                                    <option value="A144 Aga Dandi P.">A144 Aga Dandi P.</option>
                                                    <option value="A145 Silvie Nur Millah">A145 Silvie Nur Millah</option>
                                                    <option value="A146 Lailatul Lutfiah">A146 Lailatul Lutfiah</option>
                                                    <option value="A147 M. Said Agil S.">A147 M. Said Agil S.</option>
                                                    <option value=""></option>
                                
                                                    <option value="A148 Mohammad Holil">A148 Mohammad Holil</option>
                                                    <option value="A149 Danu Pamungkas">A149 Danu Pamungkas</option>
                                                    <option value="A150 Aditya Wira Utama">A150 Aditya Wira Utama</option>
                                                    <option value="A151 M. Fitra Gemilang">A151 M. Fitra Gemilang</option>
                                                    <option value="A152 Muhammad Abdullah">A152 Muhammad Abdullah</option>
                                                    <option value="A153 Ahmad Eko Effendi">A153 Ahmad Eko Effendi</option>
                                                    <option value="A154 Mochammad Bagas">A154 Mochammad Bagas</option>
                                                    <option value="A155 Rakhmad Fahmi Putra">A155 Rakhmad Fahmi Putra</option>
                                                    <option value="A156 Linda Kushernawati">A156 Linda Kushernawati</option>
                                                    <option value="A157 Nurtia Suryani">A157 Nurtia Suryani</option>
                                                    <option value="A158 Hawwani Muhdat Azzahra">A158 Hawwani Muhdat Azzahra</option>
                                                    <option value="A159 Fahyu Dwi Pratiwi">A159 Fahyu Dwi Pratiwi</option>
                                                    <option value="A160 Dewi Eka Safitri">A160 Dewi Eka Safitri</option>
                                                    <option value="A161 Rahmi Aulia Barlian">A161 Rahmi Aulia Barlian</option>
                                                </select>
                                        </div>
                                    <!-- FORM ASISTEN BUYAR -->
                                    <!-- FORM PENERIMA MULAI -->
                                        <div class="form-group">
                                            <label for="penerima_laporan">
                                                Penerima Laporan
                                                    <span class="text-danger">*</span>
                                            </label>
                                                <select name="penerima_laporan" class="form-control">
                                                    <option value="<?php echo $this->session->userdata("ses_nama"); ?>"><?php echo $this->session->userdata("ses_nama"); ?></option>
                                                </select>
                                        </div>
                                    <!-- FORM PENERIMA BUYAR -->
                                    <!-- FORM TANGGAL PENGUMPULAN MULAI -->
                                        <div class="form-group">
                                            <label for="tanggal_pengumpulan">
                                                Tanggal Pengumpulan
                                                    <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="tanggal_pengumpulan" type="date">
                                            <?php echo $this->input->post('tanggal_pengumpulan'); ?>
                                            </input>
                                                <span class="text-danger"><?php echo form_error('tanggal_pengumpulan');?></span>
                                        </div>
                                    <!-- FORM TANGGAL PENGUMPULAN BUYAR -->
                                        <div class="border-top">
                                            <div class="card-body">
                                                <input type="submit" name="submit" value="Simpan" class="btn btn-primary"></input>
                                                    <a href="<?php echo base_url(); ?>"><input type="reset" name="submit" value="Batal" class="btn btn-danger"></input></a>
                                            </div>
                                        </div>