<?php

	include("template.class.php");

	$title = "Beitreten";

	$content = new Template("join.tpl");
	$content->set("title", $title);

	$layout = new Template("main.tpl");
	$layout->set("title", $title);
	$layout->set("menu1", $menu_active);
	$layout->set("content", $content->output());
	
	/**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();
	
?>