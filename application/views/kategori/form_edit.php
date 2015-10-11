<h3>Edit Data Kategori</h3>
<?php 
echo form_open('kategori/edit');
 ?>
<input type="hidden" name="id" value="<?php echo $record['kategori_id']?>">
<table class="table table-bordered">
	<tr>
	<td width="130">Nama Kategori</td>
	<td><div class="col-sm-4"><input type="text" name="kategori" class="form-control" placeholder="nama kategori"
	value="<?php echo $record['nama_kategori'] ?>"></td></div>
	</tr>
	<tr><td colspan="2"><button type="submit" class="btn btn-sm btn-primary" name="submit">Update</button>
	<?php echo anchor('kategori','Kembali', array('class'=>'btn btn-sm btn-primary')) ?></td></tr>
	</td></tr>

</table>