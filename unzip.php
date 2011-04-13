<?php
set_time_limit(300);
$filename = $_GET['fn'];

$zip = new ZipArchive;
if ($zip->open($filename) === TRUE) {
  $zip->extractTo('.');
  $zip->close();
  echo 'ok';
} else {
  echo 'failed';
}