<!-- WayStationShelter    Blue Lights Team -->
<?php
require_once('../util/main.php');

const ACTION = 'action';
const DEFAULT_ACTION = 'default_action';
const BACK_FIRST_NAME = 'first_name';
const BACK_LAST_NAME = 'last_name';
const BACK_BIRTH_DATE = 'birth_day';
const BACK_NEED_SERVICE = 'need_service';

$action = filter_input(INPUT_POST, ACTION);
if ($action == NULL) {
    $action = filter_input(INPUT_GET, ACTION);
    if ($action == NULL) {
        $action = DEFAULT_ACTION;
    }
}

switch ($action) {
    CASE DEFAULT_ACTION:
        require('form_display.php');
        break;
}
