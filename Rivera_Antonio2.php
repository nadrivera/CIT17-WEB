<!DOCTYPE html>
<html>
<head>
		<meta charset="utf -8"
		meta name="viewport" content="
		width=device width, initial - scale=1"/>
		<title>CITIES</title>
		
</head>
	
<body>

	<?php
    	#Array variable of weather conditions

    	$largest_cities=array ("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", 
    					"London");

    	for ($i=0; $i < count($largest_cities); $i++) {
    		print "$largest_cities[$i], ";
    	}

 

    	sort($largest_cities);

    	print "<ul>";
    	foreach ($largest_cities as $unordered) {
    		print "<li> $unordered </li><br />";
    	}
    	print "</ul>";

    	$add_array= array ("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", 
    					"London", "Los Angeles", "Calcutta", "Osaka", "Beijing");

 

    	sort($add_array);

    	print "<ul>";
    	foreach ($add_array as $unordered_again) {
    		print "<li> $unordered_again </li><br />";
    	}
    	print "</ul>";

	?>
		

	
</body>

</html>