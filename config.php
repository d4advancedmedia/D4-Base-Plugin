<?php
//Plugin configuration file, containing API keys or any other site-specific settings


function d4toppingchooser($toppings) { 

	#$toppings['brand'] = true;
	#$toppings['button'] = true;
	#$toppings['customsearch'] = true;
	#$toppings['fonticons'] = true;
	#$toppings['getpost'] = true;
	#$toppings['googlemap'] = true;
	#$toppings['portfolio'] = true;
	#$toppings['reanimator'] = true;
	#$toppings['slidemenu'] = true;
	#$toppings['staffmember'] = true;
	#$toppings['testimonial'] = true;

	return $toppings;

} add_filter( 'd4toppings', 'd4toppingchooser' );


?>