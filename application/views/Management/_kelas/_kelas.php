<div class="row">
    <div class="col-md-6">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Master Kelas</h4>
            <hr>
            <form class="form-horizontal style-form" method="post" action="<?php echo site_url('kelas/create') ?>">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama Kelas</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Nama Kelas" class="form-control" name="kelas_nm">
                        </div>
                </div>
                <div class="form-actions text-right pal">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>        
        </div>
    </div>
    <div class="col-md-4">
        <div class="content-panel"style="padding-left:10px;padding-right:10px">
            <h4><i class="fa fa-angle-right"></i> Daftar Kelas</h4>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th width="20%">#</th>
                        <th width="30%">Kelas</th>
                        <th width="30%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        if ($getKelas->num_rows() > 0):
                            $no = 1;
                            foreach ($getKelas->result() as $gtKelas):
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $gtKelas->kelas_nm; ?></td>

                                    <td><span><a href="<?php echo site_url('dashboard/deleteKelas') ?>/<?php echo $gtKelas->kelas_kode ?>">Delete</a></span> || <span>Edit</span></td>
                                </tr>
                                <?php
                            endforeach;
                        else:
                            ?>
                            <tr>
                                <td colspan="3"><center>Tidak ditemukan data</center></td>
                        </tr>
                    <?php
                    endif;
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


