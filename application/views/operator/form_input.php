<h3>Tambah Operator</h3>
<?php 
echo form_open('operator/post', 'Tambah Data');
 ?>
<table class="table table-bordered">
	<tr>
		<td width="120">Nama Lengkap</td>
		<td><input type="text" name="nama" class="form-control" placeholder="nama lengkap"></td>
	</tr>
	<tr>
		<td>username</td>
		<td><input type="text" name="username" class="form-control" placeholder="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" class="form-control" placeholder="password"></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
		<?php echo anchor('operator', 'kembali', array('class'=>'btn btn-primary btn-sm')); ?>
		</td>
	</tr>
</table>