<h3>Tambah Data Barang</h3>
<?php 
echo form_open('barang/post');
 ?>
<table class="table table-bordered">
	<tr>
	<td width="120">Nama Barang</td>
	<td><input type="text" name="nama_barang" class="form-control" placeholder="nama barang"></td>
	</tr>
	<tr><td>Kategori</td>
		<td>
		<select class="form-control" name="kategori">
			<?php 
				foreach ($kategori as $k) 
					{
						echo "<option value='$k->kategori_id'>$k->nama_kategori</option>";
					}
			?>
		</select>
		</td>
	</tr>
	<tr>
	<td>Harga</td>
	<td><input type="text" name="harga" class="form-control" placeholder="harga"></td>
	</tr>
	<tr><td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
	<?php echo anchor('barang','Kembali', array('class'=>'btn btn-sm btn-primary')) ?></td></tr>
	</td></tr>
</table>