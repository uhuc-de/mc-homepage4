<?php

	function putInContainer($rules) {
		$r = new Template("rules_container.tpl");
		$r->set("headline", $rules["headline"]);
		$r->set("anchor", $rules["anchor"]);
		$r->set("content", $rules["content"] );
		return $r;
	}


	include("template.class.php");

	$title = "Regeln";

	$rules_array = [];




	$r1 = [
	"headline" => "Allgemeines",
	"anchor" => "#general",
	"content" => '<ul>
		<li>
			<a name="general.cheats" href="#general.cheats">Keine Cheats</a>
			<p>Alles, was einzelnen Spielern einen unfairen Vorteil verschafft (Mapediting, Client-seitige Modifikationen, transparente Texturen, etc.) ist verboten.</p>
		</li>
		<li>
			<a name="general.mods" href="#general.mods">Keine Mods</a>
			<p>Es handelt sich hier um einen reinen Vanilla-Server - Wir unterstützen weder Client- noch Server-seitige Modifikationen jedweder Art.</p>
		</li>
		<li>
			<a name="general.pvp" href="#general.pvp">Kein PvP</a>
			<p>Hier heißt es: „Alle für Einen und Einer für Alle“ nicht „Nimm was immer du kriegen kannst“.</p>
		</li>
	</ul>'];
	array_push($rules_array, putInContainer($r1));
	

	$r2 = [
	"headline" => "Verhaltensregeln untereinander",
	"anchor" => "#behaviour",
	"content" => '<ul>
		<li>
			<a name="behaviour.havoc" href="#behaviour.havoc">Keine Zerstörung anrichten</a>
			<p>Kein Bauwerk eines anderen darf ohne vorherige Erlaubnis des Besitzers in irgend einer Weise verändert werden.</p>
		</li>
		<li>
			<a name="behaviour.insults" href="#behaviour.insults">Keine Beleidigungen</a>
			<p>Persönliche Angriffe sind hier unerwünscht.</p>
		</li>
		<li>
			<a name="behaviour.maturity" href="#behaviour.maturity">Reife User erwünscht</a>
			<p>Generell ein reifes Verhalten an den Tag zu legen vermeidet Probleme.</p>
		</li>
		<li>
			<a name="behaviour.theft" href="#behaviour.theft">Kein Diebstahl</a>
			<p>Niemand darf ohne vorherige Erlaubnis des Besitzers fremde Gegenstände an sich nehmen.</p>
		</li>
	</ul>'];
	array_push($rules_array, putInContainer($r2));



	$rules = new Template("rules.tpl");
	$rules->set("title", $title);
	$rules->set("content", Template::merge($rules_array) );


	$layout = new Template("main.tpl");
	$layout->set("title", $title);
	$layout->set("menu3", $menu_active);
	$layout->set("content", $rules->output());
	
	/**
	 * Outputs the page with the user's profile.
	 */
	echo $layout->output();
	
?>