<?
include "temp.php" ; 
if($_POST["submit"]=='Lanjut'){
        
        if($_POST["username"]==$un and $_POST["password"]==$pw){
            $_SESSION["username"]=1;
        }
        
    }

    if($_GET["act"]=='logout')
        unset($_SESSION["username"]);

?>      
        <div id="main">
		<?
            if(!isset($_SESSION["username"])){
        
        ?>
        <i>Silahkan Login untuk mengunjungi halaman admin...</i><br><br>
		<form action="index.php?menu=home" method="post">
		<label>Username : </label><input name="username" type="text" id="username" />
		<label>Password : </label><input name="password" type="password" id="password" />
		<input name="submit" type="submit" class="button" value="Lanjut" />
		</form>
	   <?
            };
       ?>
        <h2>Sistem Informasi Penanggulangan Bencana SAR Trenggana</h2>
        <p>
		Sistem Informasi ini dibangun dalam rangka membantu TIM SAR Trenggana dalam melakukan manajemen korban dan kejadian. Aplikasi ini mampu untuk melakukan pemetaan lokasi kejadian berbasis dengan Google Map sudah sangat teruji kehandalannya. Selain itu, kemudahan dalam penggunaan user interface membuat aplikasi berbasis web ini nyaman dan dapat digunakan pada table PC, baik untuk iPad, Galaxy Tab, dan Blackberry.
        </p>
        
        <h3>Sejarah Aplikasi</h3>
        <p>Aplikasi ini di desain dan muncul pertama kali setelah kegiatan pengabdian kepada masyarakat di Universitas Negeri Malang di danai oleh DIKTI dan kami sebagai dosen, antara lain : Harits Ar Rosyid, Didik Dwi Prasetya, dan M. Zainal Arifin berkeinginan untuk membantu TIM SAR trenggana dalam memanajemen data dan lokasi korban dengan baik dan memudahkan dalam sharing data.</p>
