<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header('Content-Type: application/json; charset=utf-8');

    //var_dump($_SERVER['REQUEST_METHOD']);
    //var_dump($_SERVER['QUERY_STRING']);
    $keresSzoveg = explode('/',$_SERVER['QUERY_STRING']);
    if ($keresSzoveg[0] ==='ugyfelek') {
        require_once 'ugyfel/index.php';
    }else if ($keresSzoveg[0] === 'befizetes') {
        require_once 'befizetes/index.php';
    }
    else
    {
        http_response_code(404);
        $JSONerror = array("message" => "Nincs ilyen API");
        return json_encode($JSONerror); 
    }