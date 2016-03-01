<?php
// set this value to Y if you only want to overwrite old php.ini files
// set this value to N if you want to put a php.ini file in every directory
$overwriteOnly = "N";

if ($overwriteOnly == "Y") echo "Operating in Overwrite Only Mode<br><br>";
$path = "/kunden/homepages/41/d512184139/htdocs";
$source = $path . "/php.ini";
if (!file_exists($source)) die('Error - no source php.ini file');
function search($dir) {
global $source;
global $overwriteOnly;
$dh = opendir($dir);
while (($filename = readdir($dh)) !== false) {
if ( $filename !== '.' AND $filename !== '..' AND $filename !== 'cgi-bin' AND is_dir("$dir/$filename") ) {
$path = $dir."/".$filename;
$target = $path . "/php.ini";
if (!file_exists($target) AND $overwriteOnly == "Y") {
echo "$path <b>skipped - no php.ini file</b><br>";
} else {
echo "$target <br>";
if (!copy($source,$target)) echo "<b>Write failed for $target </b><br>";
if (file_exists($target)) chmod($target,0600);
}
search($path);
}
}
closedir($dh);
}
search($path);
echo "<br>Done.";
?> 