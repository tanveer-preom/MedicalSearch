<!DOCTYPE html>
<html>
<body>

<form action="results" method="get">
  
  <input type="Name" name="search">    <input type="submit" value="SEARCH">
   
   	<br>
	<select name="CompanyName">

		<option value=  "All"  >  All  </option>
		   
		@foreach($company_name as $company)
			
		<option value=  <?php echo $company->name; ?>  >  <?php echo $company->name; ?>  </option>
		   
			
		@endforeach

	</select>


	
</form>





</body>
</html>