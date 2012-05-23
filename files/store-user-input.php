<?php ini_set('max_execution_time', 180);
 
 // Includes the global SEOstats class
include '../src/class.seostats.php';
 
try {
	// Gets the URL of Page A from user input
	$url = new SEOstats($_POST["a_url"]);
	// Pulls the Google PageRank of Page A and stores it in $pr_a
	$pr_a = $url->Google_Page_Rank();
	
	// Gets the URL of Page T1 from user input
	$url = new SEOstats($_POST["t1_url"]);
	// Pulls the Google PageRank of Page T1 and stores it in $pr_t1
	$pr_t1 = $url->Google_Page_Rank();
	
} 
	
catch (SEOstatsException $e) {
	// Error handling
	die($e->getMessage());
	}
	
?>