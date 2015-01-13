 <?php

// The worker will execute every X seconds:
$seconds = 1;

// We work out the micro seconds ready to be used by the 'usleep' function.
$micro = $seconds * 1000000;

while (true) {

 // This is the code you want to loop during the service...
 $myFile = '/Users/stringhamdb/Sandbox/temp/php-daemon.log';

 $fh = fopen($myFile, 'a') or die('Can not open file');

 $stringData = 'File updated at: '.time().PHP_EOL;

 fwrite($fh, $stringData);

 fclose($fh);

 // Now before we 'cycle' again, we'll sleep for a bit...
 usleep($micro);
}