<h3>Kategori Barang</h3>
<?php echo anchor ('kategori/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')); ?>

<hr>
<table class="table table-bordered">
	<tr class="info"><th>No</th><th>Nama Kategori</th><th colspan="2">Operasi</th></tr>
<?php 
$no=1;
foreach ($record->result() as $r)
{
	echo "<tr>
	<td width='10'>$no</td>
	<td>$r->nama_kategori</td>
	<td width='10'>".anchor('kategori/edit/' .$r->kategori_id,'Edit', array('class'=>'glyphicon glyphicon-edit'))."</td>
	<td width='10'>".anchor('kategori/delete/' .$r->kategori_id,'Delete',array('class'=>'glyphicon glyphicon-remove-sign'))."</td>
	</tr>";
	$no++;
}

 ?>
</table>


