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
    'server01' => array(
        'url' => 'http://smonitor/RPC2',
        'port' => '9001',
        'username' => 'bobb',
        'password' => '123Oleary'
//        'username' => 'yourusername',
//        'password' => 'yourpass'
    ),
    'server02' => array(
        'url' => 'http://hubot/RPC2',
        'port' => '9001'
    ),
    'server03' => array(
        'url' => 'http://nagios/RPC2',
        'port' => '9001'
    ),
    'server04' => array(
        'url' => 'http://nginx/RPC2',
        'port' => '9001'
    ),
    'server05' => array(
        'url' => 'http://phpadmin/RPC2',
        'port' => '9001'
    ),
    'server06' => array(
        'url' => 'http://zen/RPC2',
        'port' => '9001'
    ),
);

// Set timeout connecting to remote supervisord RPC2 interface
$config['timeout'] = 3;

// Path to Redmine new issue url
//$config['redmine_url'] = 'http://redmine.url/path_to_new_issue_url';

// Default Redmine assigne ID
$config['redmine_assigne_id'] = '69';


