<div class="row-fluid">
    <div class="span12">

        <h3 class="page-title">
            Manajemen Mata Pelajaran
        </h3>
    </div>
</div>
<div class="row-fluid">
    <div class="span6">
        <!-- BEGIN GRID SAMPLE PORTLET-->
        <div class="widget">
            <div class="widget-title">
                <h4>Input Mata Pelajaran</h4>

            </div>
            <div class="widget-body">
                <form method="post" action="<?php echo site_url('mapel/create') ?>">
                    <table>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Mata Pelajaran</label></td>
                                <td> : </td>
                                <td>
                                    <div class="controls">
                                        <input type="text"  class="input-medium" name="mapel_nm">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"><input type="submit" name="submit" class="btn blue"><i class="icon-ok"></i> Save</button></td>
                            </tr>

                        </div>
                    </table>
                </form>
            </div>
        </div>   

        <!-- END GRID PORTLET-->
    </div>
    <div class="span6">
        <!-- BEGIN GRID SAMPLE PORTLET-->
        <div class="widget">
            <div class="widget-title">
                <h4>Daftar Kelas</h4>

            </div>
            <div class="widget-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="20%">#</th>
                            <th width="40%">Kelas</th>
                            <th width="40%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($getMapel->num_rows() > 0):
                            $no = 1;
                            foreach ($getMapel->result() as $gtMapel):
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $gtMapel->mapel_nm; ?></td>

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
    </div><!-- END GRID PORTLET-->
</div>
</div>
