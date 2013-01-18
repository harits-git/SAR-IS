<?php

    if($_POST["submit"]){
        
        //print_r($_POST);
        include "config.php";
        $sql = "insert into markers(kejadian,keterangan,lat,lng,tipe) 
                values('".$_POST["nama"]."',
                        '".$_POST["keterangan"]."',
                        '".$_POST["lat"]."',
                        '".$_POST["lng"]."',
                        '".$_POST["jenis"]."'
                )";
        $result = $db->execute($sql);
        if($result)
            echo "Sukses disimpan";
        else
            echo "Gagal disimpan";
		
		/*?>
		<script type="text/javascript">
		setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 1000);
		</script>
		<?php*/
    }

	//echo "koordinat : ";
	//echo $_GET["c"];
	
	$koord_asli = $_GET["c"];
    $koor = str_replace('(','',$koord_asli);
	$koor = str_replace(')','',$koor);
    $koor = str_replace(' ','',$koor);
    $koor_=explode(',',$koor);
    
    $lat=$koor_[0];
    $lng=$koor_[1];
    
    

?>

<form method="post" action="" name="f1">
<h3>Menambah Titik Baru</h3>
<table width="90%" border="0">
<tr>
    <td>Lat</td>
    <td><?=$lat;?></td>
    <input type="hidden" name="lat" value="<?=$lat;?>"/>
</tr>
<tr>
    <td>Long</td>
    <td><?=$lng;?></td>
    <input type="hidden" name="lng" value="<?=$lng;?>"/>
</tr>
<tr>
    <td>Nama Titik</td>
    <td><input type="text" name="nama" size="40"/></td>
</tr>
<tr>
    <td>Keterangan</td>
    <td>
        <textarea name="keterangan" cols="30" rows="5"></textarea>
    </td>
</tr>
<tr>
    <td>Jenis</td>
    <td>
        <select name="jenis">
			<option value="laporan">Laporan</option>
            <option value="meninggal">Korban : Meninggal</option>
            <option value="lukaberat">Korban : Luka Berat</option>
            <option value="lukaringan">Korban : Luka Ringan</option>
            <option value="selamat">Korban : Selamat & tidak terluka</option>
            <option value="pos">Titik POS Pantau SAR</option>
            <option value="puskesmas">Puskesmas</option>
            <option value="pmi">P M I</option>
			<option value="peringatan">Peringatan</option>
        </select>
    </td>
</tr>
</table><br /><br />
<div align="center"><input type="submit" name="submit" value="Simpan Titik"/></div>
</form>