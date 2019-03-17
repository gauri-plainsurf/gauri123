<?php
$user=$_COOKIE['user'];
?>

 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-uppercase" id="exampleModalLabel1">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                            <form action="logincheck.php" method="post" class="p-3">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">username</label>
                                                <input type="text" class="form-control" placeholder="username" name="user" value="<?= $user;?>" id="recipient-name" required="">
					</div>
					<div class="form-group">
						<label for="recipient-name1" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="pass" id="recipient-name1" required="">
					</div>
					<div class="right-w3l mt-4 mb-3">
						<input type="submit" class="form-control" name="submit">
					</div>
				</form>

			</div>
		</div>
	</div>
</div> 
       