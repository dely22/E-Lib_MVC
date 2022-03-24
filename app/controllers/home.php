<?php
require_once 'controller.php';
class Home extends Controller{

    function __construct()
    {
        echo "";
    }

    function index(){

        echo "<h1>index of home</h1>";

    }

    function lib(){

        $this->view("lib");

    }
}
?>