<?php

require("database.php");
require_once("header.php");
require_once("form.php");

 class Tugas{
    private $config = [];
    public function __construct($variabel)
    {
        $this->config=$variabel;
    }
    public function x($tugas){
        if (array_key_exists($tugas,$this->config)){
            require($this->config[$tugas]);
        }
        else{
            require($this->config["home"]);
        }
    }
}

$url=[
    "home"=>"home.php",
    "about"=>"about.php",
    "contact"=>"contact.php",
    "add"=>"add.php",
    "update"=>"update.php",
    "hapus"=>"hapus.php"
];
$bagus = new tugas($url);
$bagus->x(@$_REQUEST["mod"]);
require_once("footer.php");