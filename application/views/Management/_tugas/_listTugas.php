<div style="padding-left:15px">                            
    <div class="content-panel"style="padding-left:10px;padding-right:10px">
                              <h4><i class="fa fa-angle-right"></i> Daftar Tugas Sdr. <?php echo $this->session->userdata('user_display_name')?></h4>
                              <hr>
                              <table class="table">
                                      <thead>
                                    <tr>
                                        <th>#</th>                           
                                        
                                        <th>Tugas</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
                                    if($dt_tugas->num_rows()>0){
                                    foreach($dt_tugas->result() as $tugas){
                                        //$path=$materi->materi_file;
                                        ?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $tugas->materi_nm?></td>
                                        <td><?php echo $tugas->mapel_nm;?></td>
                                        <td>Sudah Kirim||Belum Kirim</td>
                                        <td><a href="<?php echo site_url('tugas/DetailTugas').'/'.$this->session->userdata('user_kelas').'/'.$tugas->mapel_kode;?>">Upload</a>|<a href="#">Download</a>|<a href="#">View</a></td>
                                    </tr>
                                    <?php }
                                    }else{?>
                                    <tr>
                                        <td colspan="4"><center>Tidak Ada Tugas</center></td>
                                         </tr>
                                      <?php }?>
                                    </tbody>
                              </table>
                          </div>
                      </div>  
</div>

 
                           