#!/bin/bash

phpbin=/usr/bin/php
lessbin=/usr/bin/lessc

dest="../www/"
src="./"


mkdir -p "${dest}files"

# PHP zu HTML verarbeiten
for f in ${src}*.php
do
	if [[ ! "$f" =~ ^(.*)template\.class(.*)$ ]]; then
		echo -n "Processing `basename $f` file... "
		basename=`basename $f .php`
		$phpbin $f > ${dest}${basename}.html
		echo "done"
	fi
done

# Less zu CSS übersetzen
for f in ${src}*.less
do
	echo -n "Processing `basename $f` file... "
	basename=`basename $f .less`
	$lessbin $f > ${dest}${basename}.css
	echo "done"
done


# chat.php erzeugen
echo -n "Generate chat.php... "
cat <<EOF > ${dest}chat.php
<?php
header("Location: https://mibbit.com/chat/?server=irc.jdqirc.net&channel=%23minecraft&nick=WebsiteVisitor");
exit;
?>
EOF
echo "done"


# copy files
echo -n "Copy files... "
cp ${src}files/* ${dest}files/
echo "done"
