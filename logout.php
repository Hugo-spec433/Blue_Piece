<?php session_start();

session_unset();
session_destroy();
session_start();
die (header ('refresh: 1; url=/bluepiece') . 'Ha salido de su cuenta.');

?>