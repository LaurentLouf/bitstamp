<?php 

mysql_connect("db3023.1and1.fr", "dbo354680228", "Wo33K59") ;
mysql_select_db("db354680228") ; 


mysql_query('INSERT INTO bitstamp (price, amount, dateandtime) VALUES("'.$_POST['price'].'", "'.$_POST['amount'].'", NOW())')
?>