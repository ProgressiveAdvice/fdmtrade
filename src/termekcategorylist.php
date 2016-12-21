<?php
	function endsWith($string, $test) {
		$strlen = strlen($string);
		$testlen = strlen($test);
		if ($testlen > $strlen) return false;
		return substr_compare($string, $test, $strlen - $testlen, $testlen) === 0;
	}
	
	$productCategories = array();
	
	if ($directoryHandle = opendir("assets/data/")) {
		/* This is the correct way to loop over the directory. */
		while (false !== ($entry = readdir($directoryHandle))) {
			if ($entry != "." && $entry != ".." && endsWith($entry, ".json")) {
				$jsonContent = file_get_contents("assets/data/" . $entry);
				$jsonContent = utf8_encode($jsonContent);
				
				$productCategories[] = json_decode($jsonContent, true);
			}	
		}
	}
	
	include "header.php";
?>

	<ul>
	<?php
		foreach($productCategories as $category) {
			?>
			<li>
				<div class="category_item">
					<img src="assets/images/category/<?php echo $category["image"]; ?>" alt="<?php echo $category["title"]; ?>" />
					<a href="termekek/<?php echo $category["url"]; ?>"><h3><?php echo $category["title"]; ?></h3></a>									
				</div>
			</li>
			<?php
		}
	?>
	<ul>
	
<?php
include "footer.php";
?>		