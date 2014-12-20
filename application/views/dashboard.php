
                            <div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="profile">
                                            <div style="margin-bottom: 15px" class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    <h2>
                                                        <?php echo $this->session->userdata('user_display_name')?></h2>
                                                    <p>
                                                        <strong>About:</strong> <?php echo $this->session->userdata('user_about')?></p>
                                                   
                                                    <p>
                                                        <strong class="mrs">Skills:</strong><span class="label label-green mrs">html5</span><span
                                                            class="label label-green mrs">css3</span><span class="label label-green mrs">jquery</span></p>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 text-center">
                                                    <figure><img src="<?php echo base_url().'/'.$this->session->userdata('user_photo')?>" alt="" style="display: inline-block" class="img-responsive img-circle"/>
                                                    <figcaption class="ratings"><p><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star-o"></span></a></p></figcaption>
                                                </figure>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <div class="col-lg-8">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                            Welcome to Dashboard</div>
                                    </div>
                                    <div style="overflow: hidden;" class="portlet-body">
                                        Selamat Datang <strong><?php echo $this->session->userdata('user_display_name')?></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
