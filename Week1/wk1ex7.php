<html>
<body>
<?php
	$hourlyrate  = 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;

	$taxRate = 0.22;  // 22% tax rate
	$tax = $gross * $taxRate;  // Calculate the tax
	$net = $gross - $tax;  // Subtract tax from gross to get net wage

	echo "Gross Wage: £" . $gross . "<br>";
	echo "Net Wage (after tax): £" . $net;
?>
</body>
</html>
