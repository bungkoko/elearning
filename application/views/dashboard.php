<div class="row-fluid">
    <div class="span12">

        <h3 class="page-title">
            Dashboard
            <small><?php echo $this->session->userdata('user_role') ?></small>
    </div>                           </h3>
</div>
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN GRID SAMPLE PORTLET-->
        <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Grid 12</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                Selamat Datang Saudara <?php echo $this->session->userdata('user_display_name') ?> dan anda sebagai <?php echo $this->session->userdata('user_role') ?>
            </div>
        </div>
        <!-- END GRID SAMPLE PORTLET-->
    </div>
</div>

<!--<div class="widget">
    <div class="widget-title">
        <h4><i class="icon-globe"></i>Blank Page</h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <a href="javascript:;" class="icon-remove"></a>
        </span>                    
    </div>
    <div class="widget-body">
        Selamat Datang Saudara <?php echo $this->session->userdata('user_display_name') ?> dan anda sebagai <?php echo $this->session->userdata('user_role') ?>
    </div>
</div>
</div>-->

