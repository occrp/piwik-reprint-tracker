<?php

$GLOBALS['config'] = array(
    'debug'            => false, # keep this false in production, as keeping it true will expose the Piwik API token!
    'idsite'           => PIWIK_IDSITE,
    'piwik_url'        => 'https://example.com/piwik/',
    'piwik_token'      => 'PIWIK_TOKEN',
    'image_extensions' => array('png', 'jpg', 'jpeg', 'gif', 'PNG', 'JPG', 'JPEG', 'GIF'),
    'default_campaign' => 'ReprintTracker'
);