


<div class="col-md-5">
                                
                                        <div class="form-panel">
                                            <h4 class="mb"><i class="fa fa-angle-right"></i> Master Materi</h4>
                                            <hr>
                                            <div class="panel-body pan">
                                                <form method="post" action="<?php echo site_url('materi/process') ?>" enctype="multipart/form-data">
                                                <div class="form-body pal">

                                                      <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label>Mata Pelajaran</label>
                                                                    <select class="form-control" name="mapel">
                                                                    <?php 
                                                                    if($dt_tugas->num_rows()>0)
                                                                    {
                                                                        foreach($dt_tugas->result() as $tugas)
                                                                        {?>
                                                                            <option value="<?php echo $tugas->mapel_kode?>"><?php echo $tugas->mapel_nm;?></option>
                                                                    <?php 
                                                                        }
                                                                    }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Materi Kelas</label>
                                                                <select class="form-control" name="kelas">
                                                                <?php //foreach(//$dt_kelas as $kelas){?> 
                                                                    <option value="<?php echo ?>"><?php //echo /$kelas->kelas_nm;?></option>
                                                                <?php //}?>
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
