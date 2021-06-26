<?php
function buka_tabel($judul){
    echo '<div class= "table-responsive">
            <table class="table-data table table-striped" width="100%">
            <thead>
                <tr>
                <th style="width: 10 px">No</th>';
    foreach ($judul as $jdl){
        echo '<th>'.$jdl.'</th>';
    }

    echo' <th style="width: 150px">Aksi</th>
    </th>
    </thead>
    </body>';
}
function isi_tabel ($no, $data, $link, $id, $edit=true, $hapus=true){
    echo'<tr>
            <td valign="top">'.$no.'</td>';
    foreach ($data as $dt) {
        echo '<td valign="top">'.$dt.'</td>';
    }
    echo'<td valign="top">';
    if($edit){
        echo'<a href ="'.$link.'&show=detail&id='.$id.'" class="btn-succes btn-sm">
                <i class ="glyphicon glyphicon-eye-open"></i> Detail </a>';
    }
    if($hapus){
        echo'<a href="'.$link.'&show=delete&id='.$id.'" class="btn btn-danger btn-sm">
        <i class="glyphicon glyphicon-trash"></i>Hapus</a>';
    }
    echo'</td>
    </tr>';
}
 function tutp_tabel(){
     echo' </tbody>
     </table>
     </div>';
 }
?>