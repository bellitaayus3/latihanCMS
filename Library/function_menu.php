<?php
function buat_menu($link, $ikon, $judul, $leveluser=array("admin","administrator")){
    foreach($leveluser as $level){
        if($_SESSION['leveluser']==$level)
        echo'<li><a href="?content='.$link.'"><i class="fa fa- '.$ikon.'"></i>'.$judul.'</a></li>';
    }
}

function buat_submenu ($link,$judul,$leveluser=array("admin", "administrator")){
    foreach($leveluser as $level){
        if($_SESSION['leveluser']==$level)
        echo'<li><a href="?content='.$link.'">'.$judul.'</a></li>';
    }
}

function buka_dropdown($ikon, $judul, $leveluser=array("admin","administrator")){
    foreach($leveluser as $level){
        if($_SESSION['leveluser']==$level)
        echo '<li class ="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#>
        <i clas="glyphicon glyphicon-'.$ikon.'"></i> '.$judul.' <b clas= "caret"></b></a>
        <il class="dropdown-menu">';
    }
}

function tutup_dropdown ($leveluser=array("admin","administrator")){
    foreach($leveluser as $level){
        if($_SESSION['leveluser']==$level) echo'</ul></li>';
    }
}
?>