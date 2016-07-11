<?php

	include("template.class.php");

	$title = "Willkommen";

	$content = new Template("index.tpl");
	$content->set("title", $title);
	$content->set("text", "<p>Hier geht es um den Minecraft Server der uhuC.de Community. 100% Vanilla Survival, seit Mai 2011.</p>");

	$layout = new Template("main.tpl");
	$layout->set("title", $title);
	$layout->set("menu1", $menu_active);
	$layout->set("content", $content->output());
	
	/**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();
	
?>