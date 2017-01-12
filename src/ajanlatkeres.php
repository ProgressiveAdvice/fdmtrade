<?php	
	include "header.php";
?>
<h1>Lépjen velünk kapcsolatba</h1>
<div style="width: 100%; max-width: 600px;">  
	<form action="emailsend.php" method="post">
		<input type="radio" name="recipient" value="b.anka@fdmtrade.hu" checked>&nbsp;Baasandavaa Ankhbayar <strong> Tolna, Baranya, Somogy megye</strong><br />
		<input type="radio" name="recipient" value="kulcsar.szilvia@fdmtrade.hu" >&nbsp;Kulcsár Szilvia <strong> Vas, Veszprém, Zala megye </strong><br />
		<input type="radio" name="recipient" value="weblapfutar@gmail.com" >&nbsp;Weblapfutár tesztelésre
		
		Név:<input name="ugyfelnev" style="width: 100%; max-width: 600px;" />
		Telefonszám:<input name="telefonszam" style="width: 100%; max-width: 600px;" />													
		E-mail:<input name="email" style="width: 100%; max-width: 600px;" />																		
		Üzenet:<textarea name="uzenet" rows="6" style="width: 100%; max-width: 600px;" noresize="no" wrap=virtual></textarea>																	
																							
		<button class="button">Üzenet elküldése</button>
	</form>	
</div>
<?php
	include "footer.php";
?>