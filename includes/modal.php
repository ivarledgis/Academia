<?php require('config/login.php'); ?>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-heading" align="center">
					
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" method="post" action="modal.php">
		                <div class="modal-body">
				    		
				    		<input id="login_username" class="form-control" name="username" type="text" placeholder="Username" required>
				    		<input id="login_password" class="form-control" name="password" type="password" placeholder="Password" required>

        		    	</div>
				        <div class="modal-footer">
                            <input type="submit" value="Login">
				        </div>
                    </form>
                    <!-- End # Login Form -->
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
    