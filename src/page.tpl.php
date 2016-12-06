<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="utf-8">
</head>
<body>
  
    <div id="navbar_responsive">
    <?php if ($main_menu): ?>
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>
		<?php endif; ?>
    </div>
  
  
  
  <div id="header">
    <div id="navbar">
    <?php if ($main_menu): ?>
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>
		<?php endif; ?>
    </div>
    </div>
  <div id="content">
    <?php print render($page['content']); ?>
        </div>
      <!-- Egyforma magasság -->
      <div style="clear:both;"></div>
  </div>
  
  
  <div id="footer">
  <font color="white"><br><br><br><br><br><p align="right">Fdm Trade Kft.
	<br>
  4220 Hajdúböszörmény, Ipartelep u. 18-20.
  <br>
	Adószám: 25019995-2-09
	<br>
  Cégjegyzékszám: 09-09-026349
	<br><br>
  E-mail: info@farmmix.hu
  <br>
	Web: www.farmmix.hu</p>
  <br><br>
</div>




<div id="footer-lent">
	<center>
	<font color="white">	
	<p>
	Copyright © 2016 - Minden jog fenntartva.
  <br><br>
	</p>
	</center>	
</div>

  
  
  
  
  
  
  
  
  
  
  
  
 <!-- <div id="footer">
  </div>-->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script type="text/javascript" src="active.js"></script>
</body>
</html>