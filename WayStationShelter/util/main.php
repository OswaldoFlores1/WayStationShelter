<?php

$root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');

$url = filter_input(INPUT_SERVER, 'REQUEST_URI');

$directories = explode('/', $url);

$appPath = '/'.$directories[1].'/';

$cssPath = "{$appPath}/WayStationShelter/css/main.css";
