<h3>Laporan Transaksi</h3>
<?php 
echo form_open('transaksi/laporan');
 ?>
<table class="table table-bordered">
	<tr>
		<td>
			<div class="col-md-2">
				<input type="text" name="tanggal_1" class="form-control" placeholder="tanggal mulai">
			</div>
			<div class="col-md-2">
				<input type="text" name="tanggal_2" class="form-control" placeholder="tanggal selesai">
			</div>
		</td>
	</tr>
	<tr>
		<td><button class="btn btn-primary btn-sm" name="submit">Submit</button></td>
	</tr>	
</table>
</form>
<hr>
<table class="table table-bordered">
	<tr class="success">
		<th>No</th>
		<th>Tanggal Transaksi</th>
		<th>Operator</th>
		<th>Total Transaksi</th>
	</tr>
	<?php 
		$no=1;
		$total=0;
		foreach ($record as $r) 
		{
		 	echo "<tr>
		 			<td width='10'>$no</td>
		 			<td width='160'>$r->tanggal_transaksi</td>
		 			<td>$r->nama_lengkap</td>
		 			<td>$r->total</td>
		 			</tr>";
		 	$no++;
		 	$total = $total+$r->total;
		 } 
	?>
	<tr>
		<th colspan="3">Total</th>
		<th><?php echo $total; ?></th>
	</tr>
</table>