<?php //if($this->session->userdata('user_role')=='guru'){?>
<div class="row">
<div class="col-md-5">
                                
                                        <div class="form-panel">
                                            <h4 class="mb"><i class="fa fa-angle-right"></i> Master Materi</h4>
                                            <hr>
                                            <div class="panel-body pan">
                                                <form method="post" action="<?php echo site_url('materi/process') ?>" enctype="multipart/form-data">
                                                <div class="form-body pal">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                          
                                                            <input id="inputName" type="text" placeholder="Judul Materi" class="form-control" name="materi_judul">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label>Mata Pelajaran</label>
                                                                    <select class="form-control" name="mapel">
                                                                    <?php foreach($dt_mapel as $mapel){?>
                                                                        <option value="<?php echo $mapel->mapel_kode?>"><?php echo $mapel->mapel_nm;?></option>
                                                                    <?php }?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Materi Kelas</label>
                                                                <select class="form-control" name="kelas">
                                                                <?php foreach($dt_kelas as $kelas){?> 
                                                                    <option value="<?php echo $kelas->kelas_kode?>"><?php echo $kelas->kelas_nm;?></option>
                                                                <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Upload Materi (*.pdf)</label>
                                                        <input id="inputIncludeFile" name="materi_upload" type="file" accept="application/pdf," placeholder="Include some file" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Materi Kelas</label>
                                                            <select class="form-control" name="materi_jenis">
                                                                <option value="tugas">Tugas</option>
                                                                <option value="materi">Materi</option>
                                                            </select>
                                                    </div>

                                                    <div class="form-actions text-right pal">
                                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                </div>
                            </div>

 <div class="col-md-7">
                          <div class="content-panel"style="padding-left:10px;padding-right:10px">
                              <h4><i class="fa fa-angle-right"></i> Daftar Materi</h4>
                              <hr>
                              <table class="table">
                                      <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Kelas</th>
                                        <th>Jenis Materi</th>
                                        <th>Tanggal Join</th>
                                        <th>Judul Materi</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
                                    foreach($dt_materi as $materi){
                                        $path=$materi->materi_file;
                                        ?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $materi->mapel_nm;?></td>
                                        <td><?php echo $materi->kelas_nm;?></td>
                                        <td><?php echo $materi->materi_jenis;?></td>
                                        <td><?php echo $materi->materi_tanggalupload;?></td>
                                        <td><?php echo $materi->materi_nm;?></td>
                                        <td><a href="<?php echo site_url('materi/delete').'/'.$materi->materi_kode;?>">Hapus</a>|<a href="<?php echo site_url('materi/download').'/'.$materi->materi_nm.'/'.$path;?>">Download</a>|<a href="<?php echo site_url('materi/getOneMateri').'/'.$materi->materi_kode;?>">View</a></td>
                                    </tr>
                                    <?php }?>
                                    </tbody>
                              </table>
                          </div>
                      </div>  
                </div>


                <?php// }elseif($this->session->userdata('user_role')=='siswa'){?>
                    <div style="padding-left:15px">                            
    <div class="col-lg-12">
        <div class="row">
            <div class="panel panel-orange">
                <div class="panel-heading">
                
                </div>
                <div class="panel-body pan">
                    <center>
                        <div class="pdf-container">
                            
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
                <?php// }?>