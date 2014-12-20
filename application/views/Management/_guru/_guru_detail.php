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
                            <div class="span3">
                            
                                <div class="text-center profile-pic">
                                    <img src="<?php echo base_url().$dt_detail->member_photo;?>" alt="">
                                </div>
                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="javascript:void(0)"><i class="icon-coffee"></i> Portfolio</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-paper-clip"></i> Projects</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-picture"></i> Gallery</a></li>
                                </ul>
                                <ul class="nav nav-tabs nav-stacked">
                                    <li><a href="javascript:void(0)"><i class="icon-facebook"></i> Facebook</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-linkedin"></i> LinkedIn</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
                                    <li><a href="javascript:void(0)"><i class="icon-github"></i> Github</a></li>
                                </ul>
                            </div>
                            <div class="span7">
                                <h4> <?php echo $dt_detail->member_username;?> <br><small><?php echo $dt_detail->user_role_type;?></small></h4>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <td class="span2"> Nama Lengkap </td>
                                        <td>
                                            <?php echo $dt_detail->member_nm;?>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td class="span2">Tempat/Tanggal Lahir</td>
                                        <td>
                                            <?php echo $dt_detail->member_tmplahir.' ,'.$dt_detail->member_tgllahir;?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="span2">Jenis Kelamin</td>
                                        <td>
                                            <?php 

                                            if($dt_detail->member_jeniskelamin=='L'){ 
                                                echo "Laki-laki";
                                            }else{
                                                echo "Perempuan";
                                            }?>
                                         
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="span2"> Email :</td>
                                        <td>
                                            <?php echo $dt_detail->member_email;?>
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

                                <p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
                                                                
                                <h4>Address</h4>
                                <div class="well">
                                    <address>
                                        <?php echo $dt_detail->member_alamat;?>
                                    </address>
                                   
                                </div>
                            </div>
                           
                            <div class="space5"></div>
                            
                        </div>
                  </div>
               </div>