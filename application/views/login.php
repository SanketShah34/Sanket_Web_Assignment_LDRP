<div class="container-fluid">
	<div class="row m-t-80">
		<div class="offset-md-3 offset-lg-3 offset-sm-3 col-md-6 col-lg-6 col-sm-6">
			<div class="card bg-lights">
			    <div class="header main-header m-t-20">
			    	<p class="m-b-5"><strong>Welcome To My Script Page!</strong></p>
			    	<p class="m-b-5"><strong>Hope You Will Have More Fun!</strong></p>
				</div>
				<div class="m-t-20 m-b-30">
					<p class="text-center below-header"><b>You will be able to view and download your album from Facebook.</b></p>
					<p class="text-center below-header"><b>Download all your Facebook albums on just one click.</b></p>
			    	<p class="text-center below-header"><b>Please login to your Facebook account from here.</b></p>
			    	<div class="text-center m-t-40 offset-md-3 col-md-6 offset-sm-3 col-sm-6">
			    		<button type="button" class="btn btn-orange anim-button btn-lg" data-toggle="modal" data-target="#myModal">Let's Go!</button>
				    </div>
				</div>
				<!-- Modal -->
				<div id="myModal" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
						<div class="modal-dialog">
						<div class="modal-content card modalcard">
							<button type="button" class="closeModal bk-transparent" data-dismiss="modal"><img src="<?php echo base_url();?>assets/images/closemodal.png" alt=""></button>
					      	<div class="modal-header text-center">
					        	<h4 class="modal-title heading-modal text-white"><p>Enter Your Details To Login Into The</p><p> Facebook Account</p>
								</h4>
					      	</div>
					      	<div class="modal-body">
						      	<form method="post" action="">
							      	<div for="email" class="m-b-10">
							        	<input type="text" class="form-control dis" id="email" name="email" placeholder="Email Address Or Phone Number" required="">
							        </div>
							        <div for="password" class="m-b-10">
							        	<input type="password" class="form-control dis" id="password" name="password" placeholder="Password" required="">
							        </div>
							        <div>
							        	<button class="btn btn-lg form-control form-control-lg disable" disabled="disabled" type="submit" id="login" name="login" class="btn btn-default"> Log In</button>
							        </div>
						  	    </form>
					    	</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>			
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".dis").change(function(){
			if(jQuery('#email').val()!="" && jQuery('#password').val()!=""){
                $("#login").removeClass("disable");
                $("#login").removeAttr("disabled");
                $("#login").addClass("pointer");
			}
			else{
                $("#login").addClass("disable");
                $("#login").attr("disabled");
                $("#login").removeClass("pointer");
            }
		  }
		);
	});
	/*	if(jQuery('#name').val()!="" && jQuery('#email').val()!=""){
             $("button").removeClass("disable");   
            }
	})*/
</script>