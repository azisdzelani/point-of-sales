<h3>Tambah Data Kategori</h3>
<?php 
echo form_open('kategori/post');
 ?>
<table class="table table-border">
	<tr><td width="130">Nama Kategori</td>
		<td><div class="col-sm-4"><input type="text" name="kategori" class="form-control" placeholder="nama kategori"></div>
	</td></tr>
	<tr><td colspan="2"><button type="submit" class="btn btn-sm btn-primary" name="submit">Simpan</button>
	<?php echo anchor('kategori','Kembali', array('class'=>'btn btn-sm btn-primary')) ?></td></tr>
</table>
</form>