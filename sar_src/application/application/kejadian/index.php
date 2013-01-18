<h3>Daftar Kejadian Korban di Area SAR Trenggana</h3><br />
<table>
    <tr class="table-top" align="center">
        <td>Nama Kejadian</td>
        <td>Tipe</td>
        <td>Keterangan</td>
        <td>Lat</td>
        <td>Long</td>
    </tr>


<?php
//include "config.php";
/**
 * @author ipinupin
 * @copyright 2012
 */
$result=$db->Execute("select * from markers");
//echo "hasil : $result";
while(!$result->EOF){
    
    echo '<tr>
        <td>'.$result->fields["kejadian"].'</td>
        <td>'.$result->fields["tipe"].'</td>
        <td>'.$result->fields["keterangan"].'</td>
        <td>'.$result->fields["lat"].'</td>
        <td>'.$result->fields["lng"].'</td>
    </tr>';
    $result->MoveNext();
}


?>

</table>