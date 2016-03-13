<!DOCTYPE html>
<html>
<body>


<form action="{{ url('results') }}" method="POST" >
 
	
	<input type="submit" value="submit">
   	 
   	<br>
	and  <select name="TestName">

	 
		   
		@foreach($tests as $test)
			
		<option value=  {{$test->id}}  >  {{$test->name }}  </option>
		   
			
		@endforeach

	</select>
 
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

<hr>
	<a href="/User">User's Profiles</a>
	<br>
	@if(Auth::check())
	<?php echo '<br>you are logged in as ' ."<a href=\"/User/$userId->id\"></a>".$userId->name;  ?>
	@else 
	<?php echo "<a href=\"/login\">Login</a>"; ?>
	@endif

	



</body>
</html>