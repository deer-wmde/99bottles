<?php

$lyricsTemplate = <<<EOF
%s %s of mate on the wall.
%s %s of mate.
Take one out, pass it around,
%s %s of mate on the wall.


EOF;

$lyricsEnding = <<<EOF
No more bottles of mate on the wall,
no more bottles of mate.
We've taken them down
and passed them around;
now we're awake and will never sleep again! 

EOF;

$start = 99;

function getBottleString($n) {
	return ($n!=1) ? 'bottles':'bottle';
}

for ($current=$start; $current>0; $current--) {
	$next     = $current-1;
	$word     = getBottleString($current);
	$nextWord = getBottleString($next);  

	printf(
		$lyricsTemplate,
		$current,
		$word,
		$current,
		$word,
		$next,
		$nextWord
	);
}

echo $lyricsEnding, PHP_EOL;

