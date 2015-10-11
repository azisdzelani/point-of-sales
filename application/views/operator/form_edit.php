<h3>Edit Data Operator</h3>
<?php 
echo form_open('operator/edit');
 ?>
 <input type="hidden" name="id" value="<?php echo $record['operator_id']; ?>">
<table class="table table-bordered">
	<tr>
		<td width="130">Nama Lengkap</td>
		<td><input type="text" name="nama" value="<?php echo $record['nama_lengkap'] ?>" class="form-control" placeholder="nama lengkap"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username" value="<?php echo $record['username'] ?>" class="form-control" placeholder="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"  class="form-control" placeholder="password"></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
		<?php echo anchor('operator','kembali',array('class'=>'btn btn-primary btn-sm')) ?></td>
	</tr>
</table>