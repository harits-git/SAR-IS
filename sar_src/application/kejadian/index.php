<?php
	if($_GET["del"] == 1){
		include "config.php";
        $sql = "delete from markers where id=".$_GET["id"];
        $result = $db->execute($sql);
        if($result)
            echo "Berhasil hapus";
        else
            echo "Gagal hapus";
		
	}
?>
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
        <td>'.$result->fields["lng"].'</td>';
	if($_SESSION["username"]==1){
		echo '<td><a href=http://pengmas.tweetcoder.com/index.php?menu=kejadian&del=1&id='.$result->fields["id"].'>hapus</a></td>';
	}
	echo '</tr>';
    $result->MoveNext();
}


?>

</table>