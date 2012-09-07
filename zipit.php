<?php 
set_time_limit(300);

$filename = md5(time()) . '.zip';
system('zip -r '.$filename.' *'); 
system('zip '.$filename.' .htaccess'); // hidden files too 

unlink(__FILE__);
