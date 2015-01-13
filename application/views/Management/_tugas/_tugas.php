
<div class="col-md-12">
    <div class="form-panel">
        <div class="row">
            <div class="col-md-6">
                <table>
                    <tr>
                        <td><label>Nomor Induk </label></td>
                        <td> <label> : </label></td>
                        <td><label><b><?php echo $this->session->userdata('user_no_induk')?></b></label></td>
                    </tr>
                    <tr>
                        <td><label>Nama Siswa </label></td>
                        <td> <label> : </label></td>
                        <td><label><b><?php echo $this->session->userdata('user_display_name')?></b></label></td>
                    </tr>
                    <tr>
                        <td><label>Kelas </label></td>
                        <td> <label> : </label></td>
                        <td><label><b><?php echo $detail->kelas_nm?></b></label></td>
                    </tr>
                </table>
            </div>
        
            <div class="col-md-6">
                <table>
                    <tr>
                        <td><label>Tanggal Upload </label></td>
                        <td> <label> : </label></td>
                        <td><label><b><?php echo date('d-m-Y');?></b></label></td>
                    </tr>
                </table>
            </div>
        </div> 
        <hr>
    </div>
     

                                        <div class="form-panel">
                                            <h4 class="mb"><i class="fa fa-angle-right"></i> Master Materi</h4>
                                            <hr>
                                            <div class="panel-body pan">
                                                <form method="post" action="<?php echo site_url('tugas/processUpload') ?>" enctype="multipart/form-data">
                                                <div class="form-body pal">
                                                    <input type="hidden" value="<?php echo $this->session->userdata('user_no_induk')?>" name="siswa_nis">
                                                    <input type="hidden" value="<?php echo $detail->materi_kode?>" name="materi_kode">
                                                    <input type="hidden" value="<?php echo $this->session->userdata('user_kelas')?>" name="kelas_kode">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label>Mata Pelajaran</label>
                                                                     <input type="hidden" value="<?php echo $detail->mapel_kode?>" name="mapel_kode"/>   
                                                                     <input type="text" placeholder="Mata Pelajaran" value="<?php echo $detail->mapel_nm?>" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Upload Tugas (*.pdf)</label>
                                                        <input id="inputIncludeFile" name="tugas_upload" type="file" accept="application/pdf," placeholder="Include some file" />
                                                    </div>
                                                   
                                                    <div class="form-actions text-right pal">
                                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                </div>
                            </div>
