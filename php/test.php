<?php
require_once(__DIR__ . '/SharingButtons.php');

$template = 'http://digg.com/submit?title={$title}&bodytext={$description}&url={$url.raw}';

$variables = array(
	'url' => 'http://www.sharingbuttons.org/',
	'title' => 'Sharing Buttons',
	'description' => 'SharingButtons.org is a catalog of sharing services and their buttons'
);

$expect = 'http://digg.com/submit?title=Sharing+Buttons&bodytext=SharingButtons.org+is+a+catalog+of+sharing+services+and+their+buttons&url=http://www.sharingbuttons.org/';

$result = SharingButtons::substituteVariablesInString($template, $variables, 'urlencoded');

echo ($expect == $result ? 'success' : 'fail') . "\n";

// testing for modifiers
$template = '{$a} {$b.urlencoded} {$c.spaceencoded}';

$expect = '{$a} y+y+y z%20z%20z';
$variables = array(
	'b' => 'y y y',
	'c' => 'z z z',
);
$result = SharingButtons::substituteVariablesInString($template, $variables);
echo ($expect == $result ? 'success' : 'fail') . "\n";

$expect = 'x x x {$b.urlencoded} z%20z%20z';
$variables = array(
	'a' => 'x x x',
	'c' => 'z z z',
);
$result = SharingButtons::substituteVariablesInString($template, $variables);
echo ($expect == $result ? 'success' : 'fail') . "\n";

$expect = 'x x x y+y+y z%20z%20z';
$variables = array(
	'a' => 'x x x',
	'b' => 'y y y',
	'c' => 'z z z',
);
$result = SharingButtons::substituteVariablesInString($template, $variables);
echo ($expect == $result ? 'success' : 'fail') . "\n";
