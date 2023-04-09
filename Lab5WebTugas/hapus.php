<?php

$database = new Database();
$nim = $_GET["nim"];

if (isset($_GET["nim"])) {
    $database->delete("tb_tgs5", "where nim=" . $nim);
    header("Location: home");
}
