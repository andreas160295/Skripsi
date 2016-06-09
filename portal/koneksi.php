<?php
//untuk koneksi dengan serveer web tempat simpan data
$server="localhost";	//nama server
$user="root";		//nama user server
$password="";		//password server
$nmdatabase="portal";
$conn=mysql_connect($server,$user,$password) or die
("ada yang salah : $php_errormsg");

if(!$conn) {
die('tak konek'.mysql_error());	//koneksi gagal
}

//untuk memilih database newspaper
$db=mysql_select_db($nmdatabase,$conn)
or die ("terjadi kesalahan :".mysql_error());
if($db) {
}
else
{
echo "koneksi database gagal";
}


$errors = array();
?>
<script>
function isnumberkey(evt)
{
	var charcode = (evt.which) ? evt.which : event.keycode
	if ( charcode > 31 && (( charcode < 48 || charcode > 57 ) ))
	return false;
	return true;
}
</script>


			