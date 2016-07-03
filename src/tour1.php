<?php

	include("template.class.php");

	$title = "Tour - Gameplay";

	$text = "Es folgt eine kleine Tour durch den Server und seine Eigenheiten. Grob gesagt spielen wir den normalen Einzelspieler-Modus zusammen auf einem Server. Jeder baut in seinem Gebiet und besucht ab und zu die anderen mal. Es ist jedoch jederzeit Möglich zusammen mit anderen etwas aufzubauen.";

	$t1 = new Template("tour_container.tpl");
	$t1->set("headline", "Vanilla");
	$t1->set("pic_small", "2_small.png");
	$t1->set("pic_big", "2.png");
	$t1->set("text", "Das hier ist KEIN Bukkit/Spigot/XY Server. Wir spielen das normale Vanilla und benutzen immer die aktuellste [Mojang] Version. Selbstverständlich unterstützen wir keine Cracked Clients.");

	$t2 = new Template("tour_container.tpl");
	$t2->set("headline", "Mittelalter");
	$t2->set("pic_small", "1_small.png");
	$t2->set("pic_big", "1.png");
	$t2->set("text", "Der Baustil ist mittelalterlich, wobei Fantasy und Steampunk auch erlaubt sind. Jedes Gebäude sollte auch eine gewisse Ästhetik haben, sinnlose Türme und riesige Klötze ohne Struktur sind nicht gerne gesehen.");

	$t3 = new Template("tour_container.tpl");
	$t3->set("headline", "Survival");
	$t2->set("pic_small", "1_small.png");
	$t3->set("pic_big", "1.png");
	$t3->set("text", "Ein Creative-Server wäre zu langweilig, damit es auch nicht zu einfach wird, ist der Schwierigkeitsgrad auf Hard.");

	$t4 = new Template("tour_container.tpl");
	$t4->set("headline", "Whitelist");
	$t4->set("pic_small", "1_small.png");
	$t4->set("pic_big", "1.png");
	$t4->set("text", "Um den Server vor unerlaubten Besuchern zu schützen, verwenden wir eine Whitelist. Wie du auf diese kommst, erfährst du am Ende der Tour.");


	$tour = new Template("tour.tpl");
	$tour->set("title", $title);
	$tour->set("text", $text);
	$tour->set("t1", $t1->output());
	$tour->set("t2", $t2->output());
	$tour->set("t3", $t3->output());
	$tour->set("t4", $t4->output());
	$tour->set("previous", "index.html");
	$tour->set("next", "tour2.html");


	$layout = new Template("main.tpl");
	$layout->set("title", $title);
	$layout->set("menu2", $menu_active);
	$layout->set("content", $tour->output());

	/**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();

?>
