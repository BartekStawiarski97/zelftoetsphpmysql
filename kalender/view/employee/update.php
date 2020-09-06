<h1>Persoon wijzigen</h1>
	<form name="update" method="POST" action="<?php echo URL ?>employee/update/<?php echo $employee["id"] ?>">
	    <input type="hidden" name="id" value="<?=$employee["id"] ?>"/>
	    
	    <input type="text" name="name" placeholder="naam" value="<?php  echo $employee["name"] ?>">
	    <input type="date" name="date" placeholder="datum"value="<?php  echo $employee["date"] ?>">	
	    <input type="submit" value="UPDATE">
	</form>