<?php

/**
* Plugin Name: Docker plugin
* Plugin URI: https://github.com/jpampaapros/wp-plugin-update-github
* Description: This is a Fun Plugin.
* Version: 1.1
* Author: Sajid Javed
* Author URI: https://sajidjaved.com/
**/


require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/jpampaapros/wp-plugin-update-github',
	__FILE__,
	'wp-plugin-update-github'
);

// BRANCH
$myUpdateChecker->setBranch('main');

// ACCESS TOKEN
$myUpdateChecker->setAuthentication('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');
