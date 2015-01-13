<div style="padding-left:15px">                            
    <div class="content-panel"style="padding-left:10px;padding-right:10px">
                              <h4><i class="fa fa-angle-right"></i> Daftar Tugas Siswa </h4>
                              <hr>
                              <table class="table">
                                      <thead>
                                    <tr>
                                        <th>#</th>                           
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
                                        <th>Subject Tugas</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
                                    if($dt_siswa->num_rows()>0){
                                    foreach($dt_siswa->result() as $siswa){
                                        //$path=$materi->materi_file;
                                        ?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $siswa->siswa_nis;?></td>
                                        <td><?php echo $siswa->siswa_nm;?></td>
                                        <td><?php echo $siswa->materi_nm?></td>
                                        <td><?php echo $siswa->mapel_nm;?></td>
                                       	<td><a href="#">Upload</a>|<a href="#">Download</a>|<a href="#">View</a></td>
                                    </tr>
                                    <?php }
                                    }else{?>
                                    <tr>
                                        <td colspan="5"><center>Tidak Ada Tugas</center></td>
                                         </tr>
                                      <?php }?>
                                    </tbody>
                              </table>
                          </div>
                      </div>  
</div>

 
                           