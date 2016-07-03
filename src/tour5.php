<?php

	include("template.class.php");

	$title = "Tour - Gebiete";

	$text = "Grundsätzlich darf jeder nur in Gebieten bauen/abbauen/farmen etc, welche von der Community vorab genehmigt wurden. Hierzu nutzen wir Umfragen im Forum.";

	$t1 = new Template("tour_container.tpl");
	$t1->set("headline", "Starter Grundstück");
	$t1->set("pic_small", "2_small.png");
	$t1->set("pic_big", "3.png");
	$t1->set("text", "Am Anfang kann sich jeder Spieler ein freies Grundstück in der Hauptstadt aussuchen und dort eine kleine Bleibe für sich bauen.");

	$t2 = new Template("tour_container.tpl");
	$t2->set("headline", "Eigene Gebiete");
	$t2->set("pic_small", "1_small.png");
	$t2->set("pic_big", "1.png");
	$t2->set("text", "Es können auch Gebiete selbst ausgewählt werden. Die Bebauung dieser, muss jedoch mit Zustimmung von der Community geschehen. Dafür haben wir Gebietsanträge, über die die anderen User abstimmen können.");

	$t3 = new Template("tour_container.tpl");
	$t3->set("headline", "Verwaiste Gebiete übernehmen");
	$t3->set("pic_small", "1_small.png");
	$t3->set("pic_big", "1.png");
	$t3->set("text", "Wenn User nicht mehr auf der Whiteliste ist, werden alle seine Bauwerke/Gebiete als »verwaist« markiert. Verwaiste Bauten, können von anderen Usern per Antrag übernommen werden.");

	$t4 = new Template("tour_container.tpl");
	$t4->set("headline", "todo");
	$t4->set("pic_small", "1_small.png");
	$t4->set("pic_big", "1.png");
	$t4->set("text", "todo");



	$tour = new Template("tour.tpl");
	$tour->set("title", $title);
	$tour->set("text", $text);
	$tour->set("t1", $t1->output());
	$tour->set("t2", $t2->output());
	$tour->set("t3", $t3->output());
	$tour->set("t4", $t4->output());
	$tour->set("previous", "tour4.html");
	$tour->set("next", "join.html");


	$layout = new Template("main.tpl");
	$layout->set("title", $title);
	$layout->set("menu2", $menu_active);
	$layout->set("content", $tour->output());

	/**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();

?>
