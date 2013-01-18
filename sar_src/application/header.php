<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="author" lang="cs" content="David Kohout; http://www.davidkohout.cz" />
    <meta name="copyright" lang="cs" content="David Kohout; http://www.davidkohout.cz" />
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    <meta name="robots" content="all,follow" />
    <link href="css/screen.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <title>SI SAR Trenggana</title>
  </head>
  
  <body>

    <div id="layout">
      
      <div id="header">
        
        <h1 id="logo"><a href="index.php?menu=home" title="#">SI SAR Trenggana</a></h1>
        <hr class="noscreen" />   
          
              
        <div id="navigation">
        <ul>
          <li><a href="index.php?menu=home" title="#">HOME</a></li>
          <?
                if($_SESSION["username"]){
                    
                
          ?>
          <li><a href="index.php?menu=map&rh=1&rf=1" title="#" target="_blank">MAP</a></li>
          <li><a href="index.php?menu=kejadian" title="#">KEJADIAN</a></li>
          <li><a href="index.php?menu=kejadian&item=prediksi" title="#">Prediksi</a></li>
          <?
            };
          ?>
          <li><a href="index.php?menu=about" title="#">ABOUT US</a></li>
          <?
                if($_SESSION["username"]){
                    
                    echo '<li><a href="index.php?menu=home&act=logout" title="#">[logout]</a></li>';
                }
          ?>
          
        </ul>
        </div>
        <hr class="noscreen" />  
    
      </div>