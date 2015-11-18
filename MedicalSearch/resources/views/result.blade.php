
	<?php $number=1;  ?>
	
		@foreach($results as $result)
				<p>

				<?php print $number.'.'; ?> <h2><?php print $result->TestName ?></h2>	
				</p>
				<br>
				<?php
					echo "\nPrice:".$result->DiagPrice."TAKA"."\n";
					echo "<br>";
					echo " ".$result->additional_info;
					echo "<br>";
					
					$number=2; 
				?>

				<br>
				<p>
					<?php echo  "\n".$result->DiagName;  
					echo "<br>"; 
					print $result->CompanyName; ?> 
				</p>
					
			@endforeach
	 


	
