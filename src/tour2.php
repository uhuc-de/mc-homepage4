<?php

	include("template.class.php");

	$title = "Tour - Community";

	$text = "Da unsere Spieler in der Regel arbeitstätig sind, finden die Spielzeiten Abends bzw am Wochenende statt. Jedoch kann man auch sonst zu jeder Zeit joinen.";

	$t1 = new Template("tour_container.tpl");
	$t1->set("headline", "uhuC");
	$t1->set("pic_small", "2_small.png");
	$t1->set("pic_big", "3.png");
	$t1->set("text", "Unser Minecraft Service ist ein Projekt der uhuc-Community und daraus hervorgegangen. Generell nutzen wir auch die Community Dienste von anderen Subprojekten (Teamspeak, Chat, etc).");

	$t2 = new Template("tour_container.tpl");
	$t2->set("headline", "Alle User sind gleich");
	$t2->set("pic_small", "1_small.png");
	$t2->set("pic_big", "1.png");
	$t2->set("text", "Es gibt niemandem mit OP-Rechten innerhalb des Spiels und bei Umfragen zählt jede Stimme gleich.");

	$t3 = new Template("tour_container.tpl");
	$t3->set("headline", "Kleine Community");
	$t3->set("pic_small", "1_small.png");
	$t3->set("pic_big", "1.png");
	$t3->set("text", "Jeder kennt jeder. Dadurch basiert vieles auf Vertrauenbasis. Kisten mit wertvollem Inhalt können Jahrelang offen in der Gegend rumstehen, ohne das diese mutwillig geleert werden.");

	$t4 = new Template("tour_container.tpl");
	$t4->set("headline", "Keine Altersbeschränkung");
	$t4->set("pic_small", "1_small.png");
	$t4->set("pic_big", "1.png");
	$t4->set("text", "Der Server hat bewusst keine Altersbeschränkung. Jedoch wird vorausgesetzt, dass sich User nicht kindisch verhalten.");



	$tour = new Template("tour.tpl");
	$tour->set("title", $title);
	$tour->set("text", $text);
	$tour->set("t1", $t1->output());
	$tour->set("t2", $t2->output());
	$tour->set("t3", $t3->output());
	$tour->set("t4", $t4->output());
	$tour->set("previous", "tour1.html");
	$tour->set("next", "tour3.html");


	$layout = new Template("main.tpl");
	$layout->set("title", $title);
	$layout->set("menu2", $menu_active);
	$layout->set("content", $tour->output());

	/**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();

?>
