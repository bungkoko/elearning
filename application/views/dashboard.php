
 <div class="col-lg-9"><div class="col-lg-12 col-md-12 col-sm-12 mb">

   <div class="twitter-panel pn">
                                <p style="padding-top:30px">Selamat Datang di Dashboard Pribadi Web Elearning SMP Manyaran</p>
                                <p><img src="<?php echo base_url().$this->session->userdata('user_photo');?>" class="img-circle" width="50"></p>
                                <p><b><?php echo $this->session->userdata('user_display_name');?></b></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Nomor Induk</p>
                                            <p><?php echo $this->session->userdata('user_no_induk')?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Join Sejak</p>
                                            <p><?php echo $this->session->userdata('user_join')?></p>
                                        </div>
                                    </div>
                            </div>

</div>
</div><!-- /col-md-12 -->
 <div class="col-lg-3 ds">
                    <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div>
               