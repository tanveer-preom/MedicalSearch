
<?php $number=1;  ?>

@foreach($results as $result)
	<p>

		{{$number}} 

		<h2>{{$result->TestName}}</h2>	
	</p>

<br>
<?php
	echo "\nPrice:".$result->DiagPrice."TAKA"."\n";
	echo "<br>";
	//echo " ".$result->additional_info;
	print "<a href=\\test\\". $result->test_id. "\> click for details</a>";
	echo "<br>";
	
	$number=2; 
?>

<br>
<p>
	<?php echo  "Diagnostic Center Name: ".$result->DiagName;  
	echo "<br>"; 
	print "Company Name: ". $result->name; 
	echo "<br>"; 
	?> 
	
</p>
	
@endforeach




