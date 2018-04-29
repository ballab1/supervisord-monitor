<?php


// Dashboard columns. 2 or 3
$config['supervisor_cols'] = 2;

// Refresh Dashboard every x seconds. 0 to disable
$config['refresh'] = 10;

// Enable or disable Alarm Sound
$config['enable_alarm'] = true;

// Show hostname after server name
$config['show_host'] = false;

$config['supervisor_servers'] = array(
    'smonitor' => array(
        'url' => 'http://smonitor/RPC2',
        'port' => '9001',
        'username' => 'bobb',
        'password' => '123Oleary'
    ),
    'hubot' => array(
        'url' => 'http://hubot/RPC2',
        'port' => '9001'
        'username' => 'bobb',
        'password' => '123Oleary'
    ),
    'server03' => array(
        'url' => 'http://nagios/RPC2',
        'port' => '9001'
        'username' => 'bobb',
        'password' => '123Oleary'
    ),
    'nginx' => array(
        'url' => 'http://nginx/RPC2',
        'port' => '9001'
        'username' => 'bobb',
        'password' => '123Oleary'
    ),
    'phpadmin' => array(
        'url' => 'http://phpadmin/RPC2',
        'port' => '9001'
        'username' => 'bobb',
        'password' => '123Oleary'
    ),
    'zen' => array(
        'url' => 'http://zen/RPC2',
        'port' => '9001'
        'username' => 'bobb',
        'password' => '123Oleary'
    ),
);

// Set timeout connecting to remote supervisord RPC2 interface
$config['timeout'] = 3;

// Path to Redmine new issue url
//$config['redmine_url'] = 'http://redmine.url/path_to_new_issue_url';

// Default Redmine assigne ID
$config['redmine_assigne_id'] = '69';


