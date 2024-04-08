<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        require_once 'ugyfel/getUgyfel.php';
        break;

    case 'POST':
        require_once 'ugyfel/postUgyfel.php';

        break;
    case 'PUT':
        require_once 'ugyfel/putUgyfel.php';
        break;

    default:
        # code...
        break;
}