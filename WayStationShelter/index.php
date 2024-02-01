<?php
# WayStationShelter    Blue Lights Team
require_once('util/main.php');

const ACTION = 'action';
const DEFAULT_ACTION = 'default_action';

$action = filter_input(INPUT_POST, ACTION);
if ($action == NULL) {
    $action = filter_input(INPUT_GET, ACTION);
    if ($action == NULL) {
        $action = DEFAULT_ACTION;
    }
}

switch ($action) {
    case DEFAULT_ACTION:
        require('home.php');
        break;
}
