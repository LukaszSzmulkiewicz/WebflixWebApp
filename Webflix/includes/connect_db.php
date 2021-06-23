<?php 

/* Connect  on 'localhost' for database 'site_db'*/

$link = mysqli_connect('localhost','******','********','HNDSOFTS2A37');
# If  username,password and database are correct 'connecton ok' will be dispalyed on screen.
if (!$link) { 
# Otherwise fail gracefully and explain the error. 
	die('Could not connect to MySQL: ' . mysqli_error($link)); 
} 
else
	
  
?> 
