# mc.uhuc.de v4

Das hier ist das Entwicklungsrepo der Webseite der uhuC Miners. Die Webseite ist vollständig responsive. Dank HTML5 und CSS3 wird kein Javascript benötigt.


## Template System

Die statischen Seiten werden via PHP und einem simplen Templatesystem erstellt. Dazu kann das Script *make.sh* angepasst werden. Es wird PHP und LESS benötigt.


## Umleitungen auf dem Webserver

		"^/nether" => "/files/grid.png"
		"^/rules$" => "/rules.html"
		"^/rules#(.*)$" => "/rules.html#$1"
		"^/faq$" => "/faq.html"
		"^/faq#(.*)$" => "/faq.html#$1"

		"^/chat$" => "/chat.php"

		"^/forum$" => "http://uhuc.de"


## Bugs und Issues

Fehler gefunden oder Änderungen gewünscht? Eröffne ein [neues Issue](https://github.com/uhuc-de/mc-homepage4/issues/) hier auf Github.


## Lizenz

Lizenziert unter der GPLv3: http://www.gnu.org/licenses/gpl-3.0.html