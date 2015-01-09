<div style="padding-left:15px">                            
    <div class="col-lg-12">
    	<div class="row">
    		<div class="panel panel-orange">
                        <div class="panel-heading">Daftar Siswa</div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIS</th>
                                        <th>Username</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tanggal Join</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1;
                                    foreach($dt_siswa as $siswa){?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $siswa->siswa_nis;?></td>
                                        <td><?php echo $siswa->siswa_username?></td>
                                        <td><?php echo $siswa->siswa_nm?></td>
                                        <td><?php echo $siswa->siswa_tanggaljoin?></td>
                                        <td><a href="<?php echo site_url('siswa/deletesiswa')?>/<?php echo $siswa->siswa_username?>">Hapus</a></td>
                                    </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    	</div>
    </div>
</div>

 
                           