<link type="text/css" rel="stylesheet" href="../plugin/bootstrap/css/bootstrap.min.css">
<?php
include "../Library/function_table.php";
buka_tabel(array("judul"));
isi_tabel(1, array("judul content 1"),"#",1);
isi_tabel(2, array("judul content 2"),"#",2);
isi_tabel(3, array("judul content 3"),"#",3);
isi_tabel(4, array("judul content 4"),"#",4);
isi_tabel(5, array("judul content 5"),"#",5, false,true);
isi_tabel(6, array("judul content 6"),"#",6, false,true);
isi_tabel(7, array("judul content 7"),"#",7, false,true);

?>