<h3>Form Transaksi</h3>
<?php 
echo form_open('transaksi');
 ?>

<table class="table table-bordered">
	<tr class="success"><th>Form</th></tr>
	<tr>
		<td>
			<div class="col-sm-6">
				<input list="barang" name="barang" class="form-control" placeholder="masukan nama barang">
			</div>
			<div class="col-sm-1">
				<input type="text" name="qty" class="form-control" placeholder="QTY">
			</div>
		</td>
	</tr>
	<tr>
		<th>
			
			<button type="submit" class="btn btn-sm btn-info" name="submit">
			<span class="glyphicon glyphicon glyphicon-ok-circle"> Simpan</span></button>
			<?php echo anchor('transaksi/selesai_belanja','Selesai', array('class'=>'btn btn-sm btn-info glyphicon glyphicon-remove-circle')); ?>
		</th>
	</tr>
</table>
</form>
<table class="table table-bordered">
	<tr class="success">
		<th colspan="6">Detail Transaksi</th>
	</tr>
	<tr>
		<th width="10">No</th>
		<th>Nama Barang</th>
		<th>Qty</th>
		<th>Harga</th>
		<th>Subtotal</th>
		<th width="130">Cancel</th>
	</tr>
	<?php 
		$no=1;
		$total=0;
		foreach ($detail->result() as $d)
		 {
			echo "<tr>
					<td>$no</td>
					<td>$d->nama_barang</td>
					<td>$d->qty</td>
					<td>$d->harga</td>
					<td>".$d->qty*$d->harga."</td>
					<td align='center'>".anchor('transaksi/hapusitem/'.$d->t_detail_id,'Hapus',
						array('class'=>'btn btn-sm btn-danger glyphicon glyphicon-trash'))."</td>
				</tr>";

				$total=$total+($d->qty*$d->harga);
				$no++;
		}
	 ?>
	<tr>
		<td colspan="4" align="right"><b>Total</b></td>
		<td colspan="2" class="success"><?php echo $total; ?></td>
	</tr>
</table>

<datalist id="barang">
	<?php 
	foreach ($barang->result() as $b) 
	{
		echo "<option value='$b->nama_barang'>";
	}
	 ?>
	
</datalist>