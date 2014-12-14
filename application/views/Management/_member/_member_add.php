<div class="row-fluid">
    <div class="span6">
        <!-- BEGIN GRID SAMPLE PORTLET-->
        <div class="widget">
            <div class="widget-title">
                <h4>Input Kelas</h4>

            </div>
            <div class="widget-body">
                <table>
                    <form method="post" action="<?php echo site_url('dashboard/tambahkelas') ?>">
                        <tr>
                            <td><div class="control-label"><h4>Akun Member</h4></div></td>

                        </tr>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Username</label></td>
                                <td> : </td>
                                <td>
                                    <div class="controls">
                                        <input type="text"  class="input-medium" name="member_username">
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
                                        <input type="password"  class="input-medium" name="member_password">
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
                                <td><label class="control-label">Nama Member</label></td>
                                <td> : </td>
                                <td>
                                    <div class="control">
                                        <input type="text" class="input-medium" name="member_nm">
                                    </div>
                                </td>
                            </tr>
                        </div>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">E-Mail</label></td>
                                <td> : </td>
                                <td>
                                    <div class="controls">
                                        <input type="text" class="input-medium" name="member_email">
                                    </div>
                                </td>
                            </tr>
                        </div>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Tempat/Tanggal Lahir</label></td>
                                <td> : </td>
                                <td><div class="controls">
                                        <input type="text" class="input-small" name="member_tmplahir"> / <input type="text" class="m-ctrl-medium date-picker" name="member_tgllahir"></td>
                                    </div>
                            </tr>
                        </div>
                    </form>
                </table>
            </div>
        </div>   

        <!-- END GRID PORTLET-->
    </div>
</div>
