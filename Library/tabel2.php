<link type="text/css" rel="stylesheet" href="../Plugin/bootstrap/css/bootstrap.min.css">
<?php
include "../Library/function_form.php";
echo "<h1> Contoh Form </h1>";
buka_form("#",1,"edit");
buat_texbox("Nama", "nama","");
buat_textarea("Alamat", "alamat","");
$list = array();
$list[]=array ('val'=>'islam','cap'=>'ISLAM');
$list[]=array ('val'=>'kristen','cap'=>'KRISTEN');
$list[]=array ('val'=>'katolik','cap'=> 'KATOLIK');
$list[]=array ('val'=>'hindu','cap'=>'HINDU');
tutup_form("#");

?>