<html>
<head>
	<title>User</title>
</head>
<body>

	@foreach($results as $result)
	<p>
		<?php 
		echo '<h1>'.$result->name.'</h1>';
		echo $result->email;
		?>

		<a href=<?php echo 'User/'.$result->id; ?> > check profile!</a>
	</p>		
 
	@endforeach
	 
</body>
</html>