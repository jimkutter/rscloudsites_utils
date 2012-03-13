<?php 
set_time_limit(300);

system('zip -r site.zip *'); 
system('zip site.zip .htaccess'); // hidden files too 

unlink(__FILE__);