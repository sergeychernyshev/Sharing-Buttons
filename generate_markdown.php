<?php

require_once(__DIR__ . "/php/SharingButtons.php");

$lines = array_map(function($line) {
	return str_getcsv($line);
}, file('php://stdin'));

$sample_data = array(
	'title' => 'Sharing Buttons',
	'description' => 'Code libraries to work with sharing buttons',
	'url' => 'https://github.com/sergeychernyshev/Sharing-Buttons',
	'journalname' => 'sergeyche',
	'tags' => 'share', 'social media', 'buttons',
	'query' => 'Sharing Buttons'
);


$out = array();
foreach ($lines as $line) {

	$icon = $line[0];
	$title = $line[1];
	$description = $line[2];
	$url = $line[3];
	$sample = SharingButtons::substituteVariablesInString($url, $sample_data, 'urlencoded');

	echo "## $title\n\n$description\n\n![$title](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master$icon) <a href='$sample' target='blank'>$title</a>\n\nURL: `$url`\n\n";
}
