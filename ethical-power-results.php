<?php include 'header.php'; ?>

<?php 

	if(isset($_SESSION['chosenState'])) {
		include 'ethical-power-results-tables.php'; 
	} else {
		include 'ethical-power-results-no-tables.php'; 
	}

?>

<?php include 'footer.php'; ?>