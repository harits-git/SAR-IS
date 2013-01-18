<?
/**
 * linear regression function
 * @param $x array x-coords
 * @param $y array y-coords
 * @returns array() m=>slope, b=>intercept
 */
function linear_regression($x, $y) {

  // calculate number points
  $n = count($x);
  
  // ensure both arrays of points are the same size
  if ($n != count($y)) {

    trigger_error("linear_regression(): Number of elements in coordinate arrays do not match.", E_USER_ERROR);
  
  }

  // calculate sums
  $x_sum = array_sum($x);
  $y_sum = array_sum($y);

  $xx_sum = 0;
  $xy_sum = 0;
  
  for($i = 0; $i < $n; $i++) {
  
    $xy_sum+=($x[$i]*$y[$i]);
    $xx_sum+=($x[$i]*$x[$i]);
    
  }
  
  // calculate slope
  $m = (($n * $xy_sum) - ($x_sum * $y_sum)) / (($n * $xx_sum) - ($x_sum * $x_sum));
  
  // calculate intercept
  $b = ($y_sum - ($m * $x_sum)) / $n;
    
  // return result
  return array("m"=>$m, "b"=>$b);

}

//var_dump( linear_regression(array(1, 2, 3, 4), array(3, 5, 7, 9)) );
$angka =  linear_regression(

            array(40, 65, 45, 80), //berat korban
            array(3, 2, 3.23, 1.93)  //kecepatan arus
            
            ) ;
echo 'Persamaan Regresi (Linier) = '.$angka["m"].'x + '.$angka["b"].', dengan kemiringan garis : '.($angka["m"]*-1)/$angka["b"];


?>
<br /><br />
<form method="post" action="">
Berat Badan Orang yg Hilang : </td>
        <input type="text" name="bb"/>, Lama korban hilang (jam) : <input type="text" name="waktu"/>
    <input type="submit" name="submit" value="Cari Kecepatan Korban"/>
</form><br />
<?
    if($_POST["submit"]){
        
        $y = $angka["m"]*$_POST["bb"]+$angka["b"];
        $jarak = $y*$_POST["waktu"];
        
    }
?>
Perkiraan korban dengan berat <?=$_POST["bb"];?> kg hanyut dengan kecepatan <?=number_format($y,2);?> km/jam<br />
Maka, dapat diprediksi bahwa <b>korban terletak pada radius <?=number_format($jarak,2);?> km dari tempat hilangnya korban.</b><br />
<br />