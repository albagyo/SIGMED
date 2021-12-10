<?php


class HomeController
{
    function __construct()
    {

    }

    function index()
    {
        session_start();
        require_once('Views/Home/index.php');
    }
}