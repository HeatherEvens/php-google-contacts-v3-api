<?php

require 'composer_config_blank.php';
require_once COMPOSER_LOCATION.'autoload.php';

use rapidweb\googlecontacts\factories\ContactFactory;

$contacts = ContactFactory::getAll();

if (count($contacts)) {
    echo 'Test retrieved '.count($contacts).' contacts.';
} else {
    echo 'No contacts retrieved!';
}
