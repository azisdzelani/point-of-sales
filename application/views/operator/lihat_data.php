<h3>Data Operator</h3>
<?php echo anchor ('operator/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')); ?>
<table class="table table-bordered">
	<tr class="info"><th>No</th><th>Nama Lengkap</th><th>username</th><th>last login</th><th colspan="2">Operasi</th></tr>
<hr>
<?php 
$no=1;
foreach ($record->result() as $r)
{
	echo "<tr>
	<td width='10'>$no</td>
	<td>$r->nama_lengkap</td>
	<td>$r->username</td>
	<td>$r->last_login</td>
	<td width='30'>".anchor('operator/edit/' .$r->operator_id,'Edit', array('class'=>'glyphicon glyphicon-edit'))."</td>
	<td width='30'>".anchor('operator/delete/' .$r->operator_id,'Delete',array('class'=>'glyphicon glyphicon-remove-sign'))."</td>
	</tr>";
	$no++;
}

 ?>
</table>


