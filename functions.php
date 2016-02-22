<?php 

function redirectTo($newLocation) {

  header("Location:" . $newLocation);
  exit;
}
    
function display_power_table_mobile_headers($headers_array) {

	foreach($headers_array AS $key => $value) { 

		if(is_array($value)) {
			echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
		} elseif(

				$key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || 
				$key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || 
				$key == "Disabled" || $key == "Logo") {

		} else {
			echo "<td>" . $value . "</td>";
		}	

	} 

}

function display_power_table_mobile($provider_array) {

	foreach($provider_array AS $key => $value) {

		if(is_array($value)) {
			echo "<td>" . $value[$_SESSION['chosenState']] . "</td>";
		} elseif(

				$key == "act" || $key == "vic" || $key == "sa" || $key == "wa" || $key == "tas" || 
				$key == "qld" || $key == "nsw" || $key == "nt" || $key == "Prechecked" || 
				$key == "Disabled" || $key == "Logo") {

		} elseif($key == "Extra Things to Note" && $value == "") {
				
		} elseif($key == "Details Button" && $value == "") {
				
		} elseif($key == "Name") {
				echo "<td class=\"provider-name-table\">" . $value . "</td>";
		} elseif($key == "Details Button") {
				echo "<td class=\"details-button-table\">" . $value . "</td>";
		} elseif($key == "Extra Things to Note") {
				echo "<td class=\"extra-things-to-note-table\">" . $value . "</td>";
		} else {
			echo "<td class=\"" . $key . "\">" . $value . "</td>";
		}	

	} 
	
}



function display_power_table_headers_desktop($array_key) {

	include 'ethical-power-results-data.php';

	foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
			$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
			
			if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
				echo '<th class="'.$label.' vert-cell vert-cell-supplier">' . $providerKeyArray[$array_key] . '</th>';
			}
	}
}

function display_power_table_desktop($array_key) {

	include 'ethical-power-results-data.php';

	foreach($powerProvidersArray AS $providerKey => $providerKeyArray) {
			$label = strtolower(str_replace(' ', '', $providerKeyArray['Name']));
			
			if(!empty($providerKeyArray[$_SESSION['chosenState']])) {
				if($array_key == "Extra Things to Note") {
					echo '<td class="'.$label.' vert-cell vert-cell-supplier extra-things-to-note-desktop">' . $providerKeyArray[$array_key] . '</td>';
				} else {
					echo '<td class="'.$label.' vert-cell vert-cell-supplier">' . $providerKeyArray[$array_key] . '</td>';
				}
			}
	}
}

?>