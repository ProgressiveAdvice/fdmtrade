<?php
	$currentCategory = $_GET["category"];
	$currentProductUrl = $_GET["product"];

	$jsonContent = file_get_contents("assets/data/" . $currentCategory . ".json");
	$jsonContent = utf8_encode($jsonContent);
	
	$categoryObject = json_decode($jsonContent, true);
	
	$currentProduct = null;
	
	foreach($categoryObject["products"] as $product) {
		if ($product["url"] === $currentProductUrl) {
			$currentProduct = $product;
			break;
		}
	}
	
	include "header.php";
?>

	<h1><?php echo $currentProduct["name"]; ?></h1>
	<?php 
		if (isset($product["images"]) && count($product["images"]) > 0) {
			?>
			<img src="assets/images/product/<?php echo $product["images"][0]; ?>" alt="<?php echo $product["name"]; ?>" />
			<?php
		} else {
			?>
			<img src="http://placekitten.com/g/500/500" />
			<?php
		}
	?>
	<p><?php echo $product["description"]; ?></p>
	
	<a href="/termekek/<?php echo $currentCategory; ?>">Vissza</a>
	
<?php
include "footer.php";
?>		