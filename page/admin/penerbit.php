<?php
include"../../config.php";
$no = 1;
$qry_penerbit = mysql_query("SELECT * from Penerbit");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px; margin-bottom:25px;">
<b>Data Penerbit </b></div>
<a href="" class="btn btn-success" style="margin:17px;"><span class="glyphicon glyphicon-plus"> TAMBAH PENERBIT</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("input_penerbit.php");
}
else if($aksi=="edit")
{
	include("edit.php");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:15px;margin-left:17px; width:96%;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Penerbit</center></th>
	<th style=" background: #E6E6FA;"><center>Aksi</center></th>
	<?php
	 while($data = mysql_fetch_array($qry_penerbit)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['penerbit'] ?></td>
	 <td><a href=""><center><span class="glyphicon glyphicon-pencil"></span></a> || <a href=""><span class="glyphicon glyphicon-trash"></span></center></a></td>
	</tr>
	<?php } ?>
</table>
</div>