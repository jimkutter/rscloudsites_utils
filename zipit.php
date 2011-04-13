<?php 
set_time_limit(300);

system('zip -r site.zip *'); 

unlink(__FILE__);