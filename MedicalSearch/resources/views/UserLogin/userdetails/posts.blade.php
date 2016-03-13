<html>
<head>
	<title>Posts</title>
</head>
<body> 
	
	
	<?php echo '<h1>'.$userID->name.' \'s Posts!'.'<hr>'. '<br>'.'</h1>';;?>

	@foreach($posts as $post)
	
		<?php

		echo '<p>'.$post->name.'</p>';
		
		?>
		
 
	@endforeach
	 


 
	
	

	 
	 
</body>
</html>