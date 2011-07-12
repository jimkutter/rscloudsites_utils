<?php 
/**
 * Useful for cleaning out sites with lots of files in deep directories (Drupal, etc...)
 * Contributed by Sam Johnston (samj@samj.net)
 */
set_time_limit(300);

system('chmod -R u+wrx *');

system('rm -rf *');