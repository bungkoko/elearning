<div class="row-fluid">
    <div class="span6">
        <!-- BEGIN GRID SAMPLE PORTLET-->
        <div class="widget">
            <div class="widget-title">
                <h4>Input Kelas</h4>

            </div>
            <div class="widget-body">
                <form method="post" action="<?php echo site_url('dashboard/tambahkelas') ?>">
                    <table>
                        <div class="control-group">
                            <tr>
                                <td><label class="control-label">Nama Kelas</label></td>
                                <td> : </td>
                                <td>
                                    <div class="controls">
                                        <input type="text"  class="input-medium" name="kelas_nm">
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
</div>
