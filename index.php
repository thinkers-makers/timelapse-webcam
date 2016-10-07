<?php
$dir = 'webcam/';
$base_url = 'http://[HOSTNAME].local/webcam';
$newest_mtime = 0;
$show_file = 'BROKEN';
if ($handle = opendir($dir)) {
 while (false !== ($file = readdir($handle))) {
    if (($file != '.') && ($file != '..')) {
       $mtime = filemtime("$dir/$file");
       if ($mtime > $newest_mtime) {
          $newest_mtime = $mtime;
          $show_file = "$base_url/$file";
          $name_file = "$file";
       }
    }
  }
}

print '<center>
<h1>Timelapse Cam</h1>
<h2>Status: Alive</h2> <img src="' .$show_file. '" alt="Latest Image" width="540px"> <br>'.$name_file.' </center>';


?>