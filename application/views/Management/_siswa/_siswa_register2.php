<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN GRID SAMPLE PORTLET-->
        <div class="widget">
            <div class="widget-title">
                <h4>Input Kelas</h4>

            </div>
            <div class="widget-body">
                <table>
                    <form method="post" action="<?php echo site_url('siswa/processRegister') ?>" enctype="multipart/form-data">
                        <tr>
                            <td><div class="control-label"><h4>Akun siswa</h4></div></td>
                        </tr>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Username</label></td>
                                <td> : </td>
                                <td>
                                    <div class="controls">
                                        <input type="text"  class="input-medium" name="siswa_username">
                                    </div>
                                </td>
                            </tr>
                        </div>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Password</label></td>
                                <td> : </td>
                                <td>
                                    <div class="controls">
                                        <input type="password"  class="input-medium" name="siswa_password">
                                    </div>
                                </td>
                            </tr>
                        </div>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Photo</label></td>
                                <td> : </td>
                                <td> 
                                    <div class="controls">
                                        <input type="file" class="default" name="siswa_photo">
                                    </div>
                                </td>
                            </tr>
                        </div>
                        <tr>
                            <td>
                                <label class="control-label"><h4>Data Pribadi</h4></label>
                            </td>
                        </tr>


                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Nama siswa</label></td>
                                <td> : </td>
                                <td>
                                    <div class="control">
                                        <input type="text" class="input-medium" name="siswa_nm">
                                    </div>
                                </td>
                            </tr>
                        </div>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">E-Mail</label></td>
                                <td> : </td>
                                <td>
                                    <div class="input-icon left">
                                        <i class="icon-envelope"></i>
                                        <input  type="text" placeholder="Email Address" name="siswa_email" />    
                                    </div>

                                </td>
                            </tr>
                        </div>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Tempat/Tanggal Lahir</label></td>
                                <td> : </td>
                                <td>
                                    <div class="controls">
                                        <input type="text" class="input-small" name="siswa_tmplahir"> / <input type="text" class="m-ctrl-medium date-picker" size="16" value="2014-02-02" name="siswa_tgllahir" data-date="2012-12-02" data-date-format="yyyy-mm-dd">
                                    </div>
                                </td>
                            </tr>
                        </div>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Jenis Kelamin</label></td>
                                <td> : </td>
                                <td>
                                    <div class="controls">
                                        <select class="span6 chosen" name="siswa_jeniskelamin" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>

                                    </div>
                                </td>
                            </tr>

                        </div>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Agama Anda</label></td>
                                <td> : </td>
                                <td>
                                    <div class="controls">
                                        <select name="siswa_agama" class="span6 chosen" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="islam">Islam</option>
                                            <option value="protestan">Protestan</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="hindu">Hindu</option>
                                        </select>

                                    </div>
                                </td>
                            </tr>

                        </div>
                        <div class="control-group">
                            <tr>
                                <td>
                                    <label class="control-label">Alamat Anda</label>
                                </td>
                                <td>:</td>
                                <td>
                                    <div class="controls">
                                        <textarea class="span12" name="siswa_alamat" rows="6"></textarea>
                                    </div>
                                </td>
                            </tr>
                        </div>
                         
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Kelas Anda</label></td>
                                <td> : </td>
                                <td>
                                    <div class="controls">
                                        <select name="kelas" class="span6 chosen" data-placeholder="Choose a Category" tabindex="1">
                                            <?php foreach ($dt_kelas as $kelas) {?>
                                                <option value="<?php echo $kelas->kelas_kode?>"><?php echo $kelas->kelas_nm;?></option>
                                           <?php }?>
                                            </select>

                                    </div>
                                </td>
                            </tr>
                        </div>
                       
                        <div>
                            <tr>
                                <td colspan=3>
                                    <input type="submit" name="submit" class="btn btn-success" value="submit">
                                    <button type="button" class="btn">Cancel</button>
                                </td>
                            </tr>
                        </div>

                    </form>
                </table>
            </div>
        </div>   

        <!-- END GRID PORTLET-->
    </div>
</div>
