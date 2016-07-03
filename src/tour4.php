<?php

	include("template.class.php");

	$title = "Tour - Karte";

	$text = "Wir legen viel Wert auf eine ansehenliche Karte. Creeperlöcher müssen grundsätzlich vom Verursacher wieder gefüllt werden.";

	$t1 = new Template("tour_container.tpl");
	$t1->set("headline", "Kleine Karte");
	$t1->set("pic_small", "2_small.png");
	$t1->set("pic_big", "3.png");
	$t1->set("text", "Trotz ihres Alters haben wir es geschafft, die Karte relativ klein zu halten. Von Vorteil ist dabei, dass man keine sonderlich weiten Wege zurücklegen muss um einen anderen Spieler zu besuchen.");

	$t2 = new Template("tour_container.tpl");
	$t2->set("headline", "Langfristige Karte");
	$t2->set("pic_small", "1_small.png");
	$t2->set("pic_big", "1.png");
	$t2->set("text", "Die Karte existiert seit Oktober 2011 und wir werden diese sicherlich nicht zurücksetzen um \"neu anzufangen\". Mit der Zeit werden aber auch Stück für Stück neue Gebiete aufgedeckt, zu Not auch weit ab vom normalem Festland.");

	$t3 = new Template("tour_container.tpl");
	$t3->set("headline", "Overviewer");
	$t3->set("pic_small", "1_small.png");
	$t3->set("pic_big", "1.png");
	$t3->set("text", "Unsere Weltkarte wird alle drei Stunden neu generiert und ist somit fast zeitnah aktuell. Neben diversen Schildern gibt es die Karte in drei Ausführungen: [Normal], [180° gedreht] und [Nachtsicht].");

	$t4 = new Template("tour_container.tpl");
	$t4->set("headline", "Nethergrid");
	$t4->set("pic_small", "1_small.png");
	$t4->set("pic_big", "1.png");
	$t4->set("text", "Um auf der Karte auch ohne Teleporter schnell ans Ziel zu kommen, haben wir über das Nether unser sogenanntes »Grid« angelegt. Viele Orte sind über ein U-Bahn ähnliches System daran angeschlossen. Aus diesem Grund sollte man beim Erstellen eines Netherportales auch einen erfahrenen Spieler um Hilfe bitten.");



	$tour = new Template("tour.tpl");
	$tour->set("title", $title);
	$tour->set("text", $text);
	$tour->set("t1", $t1->output());
	$tour->set("t2", $t2->output());
	$tour->set("t3", $t3->output());
	$tour->set("t4", $t4->output());
	$tour->set("previous", "tour3.html");
	$tour->set("next", "tour5.html");


	$layout = new Template("main.tpl");
	$layout->set("title", $title);
	$layout->set("menu2", $menu_active);
	$layout->set("content", $tour->output());

	/**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();

?>
