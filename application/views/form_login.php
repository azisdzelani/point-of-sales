<?php 
echo form_open('auth/login');
?>
<p><br/></p>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  	<div class="panel panel-default">
  		<div class="bg-primary panel-body">
    		<div class="page-header" style="margin-top:5px;">
  				<h3 align="center"><span class="glyphicon glyphicon-education"></span> Login Area</h3>
			</div> 
				<table class="table table-border bg-primary	">
				<tr>
					<th width="120">Username</th>
					<td>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="username"  class="form-control" placeholder="masukan username"></td>
						</div>
				</tr>
				<tr>
					<th>Password</th>
					<td><div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
							<input type="password" name="password"  class="form-control" placeholder="masukan password"></td>
						</div>
				</td>
				</tr>
				<tr align="justify">
					<td></td>
					<td colspan="2"><button type="submit" class="btn btn-success btn-sm"name="submit">Login</button></td>		
				</tr>
				</table>
		</div>
	</div>
  </div>
  <div class="col-md-2"></div>
</div>
