<div class="row-fluid">
    <div class="span12">

        <h3 class="page-title">
            Manajemen User
        </h3>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN EXAMPLE TABLE widget-->
        <div class="widget">
            <div class="widget-title">
                <h4>Managed Table</h4>

            </div>
            <div class="widget-body">
                <div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
                    <div class="row-fluid">
                        <div class="span6"><div id="sample_1_length" class="dataTables_length">
                                <label>
                                    <select size="1" name="sample_1_length" aria-controls="sample_1" class="input-mini">
                                        <option value="10" selected="selected">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> records per page
                                </label>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="dataTables_filter" id="sample_1_filter">
                                <label>Search: <input type="text" aria-controls="sample_1" class="input-medium"></label>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="sample_1" aria-describedby="sample_1_info">
                        <thead>
                            <tr role="row">
                                <th style="width: 24px;" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="">No</th>
                                <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 146px;" aria-sort="descending" aria-label="Username: activate to sort column ascending">Username</th>
                                <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 280px;">Email</th>
                                <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 100px;">Tanggal Join</th>
                                <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Joined: activate to sort column ascending" style="width: 165px;">Alamat</th>
                                <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 172px;">Level User</th>
                                <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 172px;">Action</th>
                            
                            </tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <?php
                            $no = 1;
                            foreach ($dt_member as $rows):
                                ?>
                                <tr class="odd gradeX">
                                    <td class="">


                                        <?php echo $no++; ?>

                                    </td>
                                    <td class=" sorting_1"><?php echo $rows->member_username ?></td>
                                    <td class="hidden-phone ">
                                        <a href="mailto:<?php echo $rows->member_email ?>"><?php echo $rows->member_email ?></a>
                                    </td>
                                    <td class="hidden-phone "><?php echo $rows->member_tanggaljoin ?></td>
                                    <td class="center hidden-phone "><?php echo $rows->member_alamat ?></td>
                                    <td class="hidden-phone ">
                                        <?php if ($rows->user_role_type == 'admin'): ?>
                                            <span class="label label-success">Admin</span>
                                        <?php elseif ($rows->user_role_type == 'guru'): ?>
                                            <span class="label label-info">Guru</span>
                                        <?php else: ?>
                                            <span class="label label-warning">Siswa</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="hidden-phone"><a href="<?php echo site_url('member/deletemember') ?>/<?php echo $rows->member_username?>">Delete</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="dataTables_info" id="sample_1_info">Showing 1 to 25 of 25 entries</div>

                        </div>
                        <div class="span6">
                            <div class="dataTables_paginate paging_bootstrap pagination">
                                <ul><li class="prev disabled"><a href="#">← Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li class="next disabled"><a href="#">Next → </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE widget-->
    </div>
