<?php
  include_once "header.php";
?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="charset" value="utf-8">
	<input type="hidden" name="business" value="2034642@cgmatane.qc.ca">  
	<input type="hidden" name="cmd" value="_xclick"/>
	<input type="hidden" name="item_name" value="Location Kayak">  
	<input type="hidden" name="item_number" value="1">   
	<input type="hidden" name="amount" value="0.01"> 
	<input type="hidden" name="currency_code" value="CAD">
	<input type="submit" value="Payer"/>
</form>





<?php
  include_once "footer.php";
?>     

 </body>
</html>