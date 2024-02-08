<!-- WayStationShelter    Blue Lights Team -->
<?php
require_once('../util/main.php');
require_once('../model/new_guest.php');

const ACTION = 'action';
const DEFAULT_ACTION = 'default_action';
const GUEST_ACTION = 'new_guest_data';
const HOME_ACTION = 'home';
const PHOTO = 'yes_no_photo';
const FIRST_NAME = 'first_name';
const LAST_NAME = 'last_name';
const LAST_FOUR_SSN = 'last_four_ssn';
const PHONE_NUMBER = 'phone_number';
const BIRTH_DATE = 'birth_date';
const EMAIL = 'email';
const CONSIDER_HOMELESS = 'consider_homeless';
const NEED_SERVICE = 'need_service';

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
    CASE GUEST_ACTION:
        $photo = filter_input(INPUT_POST, PHOTO);
        $valid_photo = New_Guest::validateWantPhoto($photo);
        if ($valid_photo === False){
            require('form_display.php');
            break;
        }
        require('complete.php');
        break;
    CASE HOME_ACTION:
        header("Location: /waystationshelter/waystationshelter/index.php");
        exit;
}
