<?php

function imglink($src, $style="") {
	?>
	<a href="<?=$src?>"><img class="img-polaroid" style="<?=$style?>" src="<?=$src?>" title="<?=$src?>"/></a>
	<?php
}


    if (!isset($_GET["page"])) {
        $_GET["page"] = "home";
    }

    $valid_pages = array("home","projects","art","about");
    if (!in_array($_GET["page"],$valid_pages)) {
        $_GET["page"] = "404";
    }
    $page = $_GET["page"];
    include("template.php");
?>
