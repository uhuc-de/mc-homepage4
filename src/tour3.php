<?php

	include("template.class.php");

	$title = "Tour - Technik";

	$text = "Da die uhuC-Community primär ein IT-Forum ist, haben wir auch hohe Anforderungen was die Qualität unseres Dienstes angeht.";

	$t1 = new Template("tour_container.tpl");
	$t1->set("headline", "Eigene Server");
	$t1->set("pic_small", "2_small.png");
	$t1->set("pic_big", "3.png");
	$t1->set("text", "Wir hosten nichts bei Nitrado und Konsorten. Alle Dienste laufen auf unseren eigenen Servern rund um die Uhr.");

	$t2 = new Template("tour_container.tpl");
	$t2->set("headline", "Backups");
	$t2->set("pic_small", "1_small.png");
	$t2->set("pic_big", "1.png");
	$t2->set("text", "Täglich werden Backups erstellt und auf verschiedenen Servern gespeichert. Nichts geht verloren.");

	$t3 = new Template("tour_container.tpl");
	$t3->set("headline", "Kommunikation");
	$t3->set("pic_small", "1_small.png");
	$t3->set("pic_big", "1.png");
	$t3->set("text", "Für den Kontakt zu anderen Spielern, steht uns eine Reihe von Kommunikationsmitteln zur Verfügung. Wir haben ein [Subforum bei uhuc.de], einen [IRC-Channel auf jdq.net], sowie einen [Mumble] und einen [Teamspeak] Server");

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
	$tour->set("previous", "tour2.html");
	$tour->set("next", "tour4.html");


	$layout = new Template("main.tpl");
	$layout->set("title", $title);
	$layout->set("menu2", $menu_active);
	$layout->set("content", $tour->output());

	/**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();

?>
