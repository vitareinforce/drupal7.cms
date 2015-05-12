<?php
    $aliases['dev'] = array(
        'uri' => 'drupal7.cms',
        'root' => '/home/vitareinforce/Documents/www/drupal',
        'db-url' => 'mysql://root:@localhost/drupal7'
    );

    $aliases['live'] = array(
        'uri' => 'remote7.cms',
        'root' => '/home/remote7/public_html',
        'db-url' => 'mysql://root:root@remote7.cms/remote7',
        'remote-host' => 'remote7.cms',
        'remote-user' => 'remote7', //your server login id
	'ssh-options' => '-T',        
	'path-aliases' => array( //path to remote drush install
            '%drush' => '/home/remote7/drush',
            '%drush-script' => '/home/remote7/drush/drush.php',
            '%files' => '/home/remote7/public_html/sites/all/files',
            '%custom' => '/home/remote7/public_html/misc',
        ),
    );
?>
