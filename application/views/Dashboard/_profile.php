<div class="span10">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-user"></i>Profile</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
                         <?php if($this->session->userdata('user_role')=='siswa'){?>
                            <div class="span3">
                            
                                <div class="text-center profile-pic">
                                    <img src="<?php echo base_url().$dt_detail->siswa_photo;?>" alt="">
                                </div>
                               
                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="javascript:void(0)"><i class="icon-facebook"></i> Facebook</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-linkedin"></i> LinkedIn</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-github"></i> Github</a></li>
                                </ul>
                            </div>
                            <div class="span7">
                           
                                <h4> <?php echo $dt_detail->siswa_username;?> <br><small><?php echo $dt_detail->user_role_type;?></small></h4>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span2"> Nama Lengkap </td>
                                        <td>
                                            <?php echo $dt_detail->siswa_nm;?>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td class="span2">Tempat/Tanggal Lahir</td>
                                        <td>
                                            <?php echo $dt_detail->siswa_tmp_lahir.' ,'.$dt_detail->siswa_tgllahir;?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Jenis Kelamin</td>
                                        <td>
                                            <?php 

                                            if($dt_detail->siswa_jeniskelamin=='L'){ 
                                                echo "Laki-laki";
                                            }else{
                                                echo "Perempuan";
                                            }?>
                                         
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="span2"> Email :</td>
                                        <td>
                                            <?php echo $dt_detail->siswa_email;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"> Mobile :</td>
                                        <td>
                                            12345677
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h4>About</h4>

                                <p class="push"><?php echo $dt_detail->siswa_about?></p>
                                                                
                                <h4>Address</h4>
                                <div class="well">
                                    <address>
                                        <?php echo $dt_detail->siswa_alamat;?>
                                    </address>
                                   
                                </div>
                             
                            </div>
                           
                            <div class="space5"></div>
                            <?php }elseif($this->session->userdata('user_role')=='guru'){?>
                                <div class="span3">
                            
                                <div class="text-center profile-pic">
                                    <img src="<?php echo base_url().$dt_detail->guru_photo;?>" alt="">
                                </div>
                               
                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="javascript:void(0)"><i class="icon-facebook"></i> Facebook</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-linkedin"></i> LinkedIn</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-github"></i> Github</a></li>
                                </ul>
                            </div>
                            <div class="span7">
                           
                                <h4> <?php echo $dt_detail->guru_username;?> <br><small><?php echo $dt_detail->user_role_type;?></small></h4>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span2"> Nama Lengkap </td>
                                        <td>
                                            <?php echo $dt_detail->guru_nm;?>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td class="span2">Tempat/Tanggal Lahir</td>
                                        <td>
                                            <?php echo $dt_detail->guru_tmplahir.' ,'.$dt_detail->guru_tgllahir;?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Jenis Kelamin</td>
                                        <td>
                                            <?php 

                                            if($dt_detail->guru_jeniskelamin=='L'){ 
                                                echo "Laki-laki";
                                            }else{
                                                echo "Perempuan";
                                            }?>
                                         
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="span2"> Email :</td>
                                        <td>
                                            <?php echo $dt_detail->guru_email;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2"> Mobile :</td>
                                        <td>
                                            12345677
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                              
                                                                
                                <h4>Address</h4>
                                <div class="well">
                                    <address>
                                        <?php echo $dt_detail->guru_alamat;?>
                                    </address>
                                   
                                </div>
                             
                            </div>
                           
                            <div class="space5"></div>
                            <?php }?>
                        </div>
                  </div>
               </div>