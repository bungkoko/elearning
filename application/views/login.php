<div class="container">
	  	
		      <form class="form-login" action="<?php echo site_url('auth/login')?>" method='post'>
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="User ID" name='username' autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password">
		            <br>
		            <select name="level" class="form-control">
                                <option value="siswa">Siswa</option>
                                <option value="guru">Guru</option>
                                <option value="admin">Admin</option>
                    </select>
                    <br>
		            <input class="btn btn-theme btn-block" href="index.html" type="submit" value="SIGN IN">
		            <hr>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="<?php echo site_url('auth/registerguru')?>">
		                    Register For Teacher 
		                </a> || <a href="<?php echo site_url('auth/registersiswa')?>">Register For Student</a>
		            </div>
		
		        </div>
		
		      </form>	  	
	  	
	  	</div>