<form method="post" class="form-group">
	<div class="col-md-8" style="margin-bottom:20px;">
	<input type="text" name="penerbit" placeholder="penerbit baru" style="width:600px;" class="form-control">
	</div>
	<div class="col-md-1">
	<input type="submit" name="simpan" value="simpan" class="btn btn-success">
	</div>
</form>
<?php
@$sim = $_POST['simpan'];
if($sim)
{
	$penerbit = $_POST['penerbit'];
	mysql_query("INSERT into penerbit set kategori='$kat'");
	header("location:index.php?page=kategori");
}
?>