
                            <div class="row">                
                            <div class="col-md-6">
                                
                                        <div class="form-panel">
                                            <h4 class="mb"><i class="fa fa-angle-right"></i> Registrasi Guru</h4>
                                            <hr>
                                            <div class="panel-body pan">
                                                <form method="post" action="<?php echo site_url('guru/processRegister') ?>" enctype="multipart/form-data">
                                                <div class="form-body pal">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon right">
                                                                  <input id="inputName" type="text" placeholder="NIP" class="form-control" name="guru_nip">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon right">
                                                                   
                                                                    <input id="inputName" type="text" placeholder="Username" class="form-control" name="guru_username">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            
                                                            <input id="inputEmail" type="text" placeholder="Email address" class="form-control" name="guru_email"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            
                                                            <input id="inputPassword" type="password" placeholder="Password" class="form-control" name="guru_password"></div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input id="inputFirstName" name="guru_nm" type="text" placeholder="Nama" class="form-control"></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <select class="form-control" name="guru_jeniskelamin"> 
                                                                <option value="L">Laki-Laki</option>
                                                                <option value="P">Perempuan</option>
                                                            </select>
                                                               
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Upload Photo</label>
                                                        <input id="inputIncludeFile" name="guru_photo" type="file" placeholder="Include some file" />
                                                    </div>

                                                    <div class="form-group">
                                                        <input id="inputFirstName" name="guru_tmplahir" type="text" placeholder="Tempat Lahir" class="form-control">
                                                    </div>
                                                    <div class="row">
                                                        
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Tahun Lahir</label>
                                                                 <select class="form-control" name="tahun">
                                                                    <?php for($awal_thn=1960;$awal_thn<=1992;$awal_thn++){?>
                                                                        <option value='<?php echo $awal_thn;?>'><?php echo $awal_thn;?></option>
                                                                    <?php }?>
                                                                 </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Bulan Lahir</label>
                                                                 <select class="form-control" name="bulan">
                                                                    <?php for($awal_bln=1;$awal_bln<=12;$awal_bln++){?>
                                                                        <option value='<?php echo $awal_bln;?>'><?php echo $awal_bln;?></option>
                                                                    <?php }?>
                                                                 </select>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Tanggal Lahir</label>
                                                                 <select class="form-control" name="tanggal">
                                                                    <?php for($awal_tgl=1;$awal_tgl<=31;$awal_tgl++){?>
                                                                        <option value='<?php echo $awal_tgl;?>'><?php echo $awal_tgl;?></option>
                                                                    <?php }?>
                                                                 </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input id="inputName" name="guru_jabatan" type='text' placeholder='Jabatan'class="form-control"/>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label>Agama</label>
                                                                <select class="form-control" name="guru_agama">
                                                                    <option value='islam'>Islam</option>
                                                                    <option value="protestan">Protestan</option>
                                                                    <option value="katolik">Katolik</option>
                                                                    <option value="hindu">Hindu</option>
                                                                    <option value="buddha">Buddha</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label>Mata Pelajaran</label>
                                                                <select class="form-control" name="guru_mapel">
                                                                <?php foreach ($dt_mapel as $mapel) {?>
                                                                   <option value="<?php echo $mapel->mapel_kode;?>"><?php echo $mapel->mapel_nm;?></option>
                                                                <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea rows="3" placeholder="Alamat Anda" name="guru_alamat" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                                        
                                                </div>
                                                </form>
                                            </div>
                                      
                                </div>
                            </div>
               

                        <div class="col-md-6">
                          <div class="content-panel"style="padding-left:10px;padding-right:10px">
                              <h4><i class="fa fa-angle-right"></i> Daftar Guru</h4>
                              <hr>
                              <table class="table">
                                 <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIS</th>
                                        <th>Username</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tanggal Join</th>
                                        <?php if ($this->session->userdata('user_role')=='admin'){?>
                                        <th>Status</th>
                                        <?php }?>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
                                    foreach($dt_guru as $guru){?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $guru->guru_nip;?></td>
                                        <td><?php echo $guru->guru_username?></td>
                                        <td><?php echo $guru->guru_nm?></td>
                                        <td><?php echo $guru->guru_tanggaljoin?></td>
                                        <?php if ($this->session->userdata('user_role')=='admin'){?>
                                         <td>
                                            <a href="<?php echo site_url('guru/status_akses/'.$guru->guru_username.'/'.$guru->user_role_user_role_kode.''); ?>">
                                            <?php if($guru->user_role_user_role_kode=='1'){?>
                                                <span class="label label-success"><?php echo $guru->user_role_type;?></span>
                                            <?php } else {?>
                                                <span class="label label-warning"><?php echo $guru->user_role_type;?></span>                                           
                                            <?php }?>
                                            </a>
                                        </td>
                                        <?php }?>
                                        <td><a href="<?php echo site_url('guru/deleteguru')?>/<?php echo $guru->guru_username?>">Hapus</a></td>
                                    </tr>
                                    <?php }?>
                                    </tbody>
                              </table>
                          </div>
                      </div>
                      </div>
               