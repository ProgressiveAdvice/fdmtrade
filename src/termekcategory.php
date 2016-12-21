<?php
	$currentCategory = $_GET["category"];

	$jsonContent = file_get_contents("assets/data/" . $currentCategory . ".json");
	$jsonContent = utf8_encode($jsonContent);
	
	$categoryObject = json_decode($jsonContent, true);
	
	include "header.php";
?>

	<h1><?php echo $categoryObject["title"]; ?></h1>
	<ul>
	<?php
		foreach($categoryObject["products"] as $product) {
			?>
			<li>
				<div class="product_item">
					<img src="assets/images/product/<?php echo $product["image"]; ?>" alt="<?php echo $product["title"]; ?>" />
					<a href="/termekek/<?php echo $categoryObject["url"]; ?>/<?php echo $product["url"]; ?>"><h3><?php echo $product["name"]; ?></h3></a>
				</div>
			</li>
			<?php
		}
	?>
	</ul>
	
	<a href="/termekek">Vissza</a>
	
<?php
include "footer.php";
?>		