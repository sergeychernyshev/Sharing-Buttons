<?php

require_once('SharingButtons.php');

$template = 'http://digg.com/submit?title={$title}&bodytext={$description}&url={$url.raw}';

$variables = array(
	'url' => 'http://www.sharingbuttons.org/',
	'title' => 'Sharing Buttons',
	'description' => 'SharingButtons.org is a catalog of sharing services and their buttons'
);

$expect = 'http://digg.com/submit?title=Sharing+Buttons&bodytext=SharingButtons.org+is+a+catalog+of+sharing+services+and+their+buttons&url=http://www.sharingbuttons.org/';

$result = SharingButtons::substituteVariablesInString($template, $variables, 'urlencoded');

echo ($expect == $result ? 'success' : 'fail') . "\n";
