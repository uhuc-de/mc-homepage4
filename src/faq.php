<?php

	include("template.class.php");


	function createFaq ($question) {
		$row = new Template("faq_container.tpl");
	
		foreach ($question as $key => $value) {
			$row->set($key, $value);
		}
		return $row;
	}


	$title = "FAQ";
	

	$q1 = createFaq(array(
		"nr" => "1",
		"type" => "small",
		"anchor" => "#server",
		"question" => "Wie ist die Adresse des Minecraft Servers?",
		"answer" => "mc.uhuc.de:25565"
	));


	$q2 = createFaq(array(
		"nr" => "2",
		"type" => "small",
		"anchor" => "#chat",
		"question" => "Gibt es einen Chat zum Server?",
		"answer" => "Ja, wir beitreiben den <a href=\"https://de.wikipedia.org/wiki/Internet_Relay_Chat\">IRC-Channel</a> #minecraft auf jdqirc.net. Wenn du kein IRC-Programm installiert hast, kannst du auch den Webchat nutzen."
	));

	$q3 = createFaq(array(
		"nr" => "3",
		"type" => "small",
		"anchor" => "#voicechat",
		"question" => "Habt ihr Teamspeak?",
		"answer" => "Nein, für die Sprachkommunikation verwenden wir <a href=\"http://mumble.info/\">Mumble</a>. Der Server ist unter uhuc.de:64738 erreichbar.<br>Zwar ist der Server nicht passwortgeschützt, aber du kannst dir deinen Nick registrieren. Die Authentifizierung erfolgt dann über ein Zertifikat, welches lokal bei dir gespeichert wird."
	));


	$q4 = createFaq(array(
		"nr" => "4",
		"type" => "small",
		"anchor" => "#donation",
		"question" => "Kann man für den Server spenden?",
		"answer" => "Nein, der Server wird alleine vom Betreiber finanziert. Wer den Server jedoch unterstützen möchte, kann sich im Forum einbringen oder den Server weiterempfehlen."
	));

	$q5 = createFaq(array(
		"nr" => "5",
		"type" => "small",
		"anchor" => "#backups",
		"question" => "Wann werden Backups gemacht?",
		"answer" => "Täglich um 1:00 Uhr in der Nacht wird ein Backup der Welt, sowie der Whitelist erstellt. Das Backup wird dann verschlüsselt auf andere Server kopiert."
	));


	$q6 = createFaq(array(
		"nr" => "6",
		"type" => "small",
		"anchor" => "#questions",
		"question" => "Wohin soll ich mich wenden, wenn ich noch Fragen habe?",
		"answer" => "Zwei Möglichkeiten: Entweder du eröffnest einen Thread im <a href=\"http://uhuc.de/Forum-Minecraft\">Minecraft-Forum</a> oder du kommst in den <a href=\"mc.uhuc.de/chat\">Chatraum</a>."
	));



	$q7 = createFaq(array(
		"nr" => "7",
		"type" => "small",
		"anchor" => "#verify",
		"question" => "Wie kann ich meinen Account verifizieren?",
		"answer" => "Im Benutzer Control-Panel unter \"Dein Profil\" findet sich der Punkt »Minecraft Account«.</p>
			<img src=\"img/faq_verify_1.png\">
			<p>Dort gebt ihr euren MC Benutzernamen ein sowie euer Passwort:</p>
			<img src=\"img/faq_verify_2.png\">
<p>
			Wichtig: Eure Benutzerdaten werden nicht gespeichert. Sie werden nur für diesen einen Schritt benötigt. Zudem: Wer zu paranoid ist sein Passwort (wenn auch nur kurz) kromonos zu überlassen kann es ja für diesen Zweck schnell auf <a href=\"http://minecraft.net/\">minecraft.net</a> ändern.</p><

			<p>Nachdem ihr erfolgreich Bestätigt wurdet, seit ihr in der Benutzergruppe Minecraft. Ebenfalls seht ihr bei euren Beiträgen noch einen zusätzlichen Punkt:</p>
			<img src=\"img/faq_verify_3.png\">"
	));


	$q8 = createFaq(array(
		"nr" => "8",
		"type" => "small",
		"anchor" => "#admission",
		"question" => "Wie mache ich eine Einweisung aus?",
		"answer" => "Erstelle im <a href=\"https://uhuc.de/Forum-Einweisungen\">Einweisungs-Forum</a> (nur sichtbar mit einem verifizierten Account) einen Thread. Es sind dort keinerlei persönliche Informationen erforderlich. Wir bräuchten aber einen möglichen Termin für die Einweisung."
	));



	$q9 = createFaq(array(
		"nr" => "9",
		"type" => "small",
		"anchor" => "#buildings",
		"question" => "Warum brauche ich eine Baugenehmigung?",
		"answer" => "Die Baugenehmigungen dienen den Zweck, die Zustimmung der Community für dein Vorhaben zu bekommen. Dadurch wird sichergestellt, dass sich niemand auf die Füße getreten fühlt, wenn du irgendwo anfängst zu bauen. Da man keine klare Grenze ziehen kann zwischen »kleine Hütte« und »große Festung«, benötigt alles die Zustimmung der Community."
	));



	$q10 = createFaq(array(
		"nr" => "10",
		"type" => "medium",
		"question" => "Warum eine 24 Stunden Wartezeit?",
		"answer" => "Es wirkt gerade am Anfang extrem lange. Aber in den 2 Tagen gibt man jedem Mitspieler die Möglichkeit sich zu dem Vorhaben zu äußern und nach Ablauf der Zeit kannst du dir dann sicher sein, ob die Community hinter deinem Projekt steht oder nicht. Die Wartezeit kannst du damit verbringen, Materialien wie Holz oder Stein zu Sammeln, die Zeit sparst du dir dann später."
	));




	$q11 = createFaq(array(
		"nr" => "11",
		"type" => "small",
		"anchor" => "#mapsize",
		"question" => "Eure Karte ist viel zu klein. Ihr müsst mehr erkunden!",
		"answer" => "Unser Ziel ist es nicht eine möglichst große Karte zu haben, welche von Oben aussieht wie ein Teller Spaghetti. Unsere Spieler sind mit dem Bauen und Craften an ihren Projekten beschäftigt und haben keine Zeit ergebnislos in der Gegend rumzulaufen, um die Map sinnlos zu vergrössern. Das sollte dir etwas darüber sagen wo hier unsere Prioritäten liegen."
	));







	$q12 = createFaq(array(
		"nr" => "12",
		"type" => "large",
		"anchor" => "#materials",
		"question" => "Wo bekomme ich am Besten Material XY her?",
		"answer" => "In der ganzen Welt gibt es zahlreiche öffentliche Farmen. Für Nahrung (Getreide und Rinder) stehen in Uhuc-City jeweils eine Farm zur Verfügung. Im Keller des Rathauses ist eine Steinmine, Holz kann man <a href=\"http://mc.uhuc.de/map/#/-168/64/-472/max/0/0\">zwischen den Vororten und Scranton-Village</a> abbauen.</p> 
			<p>Für Diamanten, Redstone und Erze gibt es das 2. Tiefgeschoss der <a href=\"http://mc.uhuc.de/map/#/-291/64/-711/max/0/0\">Bohrinsel</a>. Sand gibt es in der eigens dafür eingerichteten <a href=\"http://mc.uhuc.de/map/#/328/64/-712/-2/0/0\">Sandmine</a>. Über das Vorgehen, steht <a href=\"http://uhuc.de/Thread-Libria-W%C3%BCste-Sandabbau\">hier</a> etwas. Lehm kann man im Ozean vor Uhuc-City abbauen. Der Abbau ist allerdings schwierig, da man leicht ertrinken kann.</p>
			<p>Es wird auch toleriert, wenn man nachwachsende Ressourcen in den Farmen anderer Spieler abbaut, jedoch müssen hierbei die Vorgaben des Besitzers eingehalten werden. Langfristig gesehen ist es jedoch sinnvoll sich Farmen innerhalb des eigenen Gebietes anzulegen."
	));


	$q13 = createFaq(array(
		"nr" => "13",
		"type" => "small",
		"anchor" => "#travel",
		"question" => "Gibt es eine Möglichkeit schnell zu reisen?",
		"answer" => "Wir nutzen ein Tunnelsystem im Nether um in der Oberwelt schnell zu reisen, genannt »Grid«. Dieses ist aufgebaut wie eine U-Bahn, eine schematische Karte findet man <a href=\"/nether\">hier</a>."
	));


	$q14 = createFaq(array(
		"nr" => "14",
		"type" => "small",
		"anchor" => "#nether",
		"question" => "Wie bekomme ich einen Netheranschluss im Grid?",
		"answer" => "Wir wollen den Nether möglichst sauber halten, deswegen für ein Portal bitte einen erfahrenen User um Hilfe bitten."
	));



	$q15 = createFaq(array(
		"nr" => "15",
		"type" => "small",
		"anchor" => "#end",
		"question" => "Ist der End-Dragon schon besiegt?",
		"answer" => "Nein, und mit hoher Wahrscheinlichkeit wird er das in nächster Zeit nicht. (Es ist keine Frage des Könnes - eher des Wollens.)"
	));



	$faq = new Template("faq.tpl");
	$faq->set("title", $title);
	$faq->set("q1", $q1->output());
	$faq->set("q2", $q2->output());
	$faq->set("q3", $q3->output());
	$faq->set("q4", $q4->output());
	$faq->set("q5", $q5->output());
	$faq->set("q6", $q6->output());
	$faq->set("q7", $q7->output());
	$faq->set("q8", $q8->output());
	$faq->set("q9", $q9->output());
	$faq->set("q10", $q10->output());
	$faq->set("q11", $q11->output());
	$faq->set("q12", $q12->output());
	$faq->set("q13", $q13->output());	
	$faq->set("q14", $q14->output());
	$faq->set("q15", $q15->output());


	/**
	 * Loads our layout template, settings its title and content.
	 */
	$layout = new Template("main.tpl");
	$layout->set("title", $title);
	$layout->set("menu4", $menu_active);
	$layout->set("content", $faq->output());
	
	/**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();
	
?>