<?php
        session_start();
        
        require_once "config.php";
        
        
        /*if(!isset($_SESSION["username"])){
        	
        	header("location:".$application_folder."login/");
        }*/
        	

        //cek login
        //if(isset($_SESSION['username'])){
        	
			//item dari menu yg dupilih
			if(isset($_GET["item"]))
				$menu_item = $_GET["item"];
			else
				$menu_item = 'index';
	
	        //penghitung load page
	        if($showLoadTime){
	
	          require_once "library/loadtime.php";
	          $waktu = new LoadTime();
	          $waktu->startLoad();
	        }
	
	        //include header
		
	        if($_GET["rh"]!='1')
	        	require_once $application_folder."header.php";
	         	
	       	//include body
	
	        
	        echo '<div id="response">';
	
	        if(isset($_GET["menu"]))
	            include $application_folder.$_GET["menu"].'/'.$menu_item.'.php';
	        else
	            include $application_folder."home/index.php";
	
	        echo '</div>';
	       
	        //include footer
	        if($_GET["rf"]!='1')
	        	require_once $application_folder."footer.php";        	
        	
        	
        //} else 
        //	include $application_folder.'login/index.php';

?>
