<html>
<head>
	<title></title>
</head>
<body>
 	<?php
	 	echo '<h1>'.$User->name.'</h1>';
	?>
	


	<p>

 	<?php
	 	echo 'EMAIL: '.$User->email;
	?>
	</p>
	<a href=<?php echo $User->id.'/posts'; ?> > {{$User->name}}'s posts!</a>		
 
	 
	 
</body>
</html>