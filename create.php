<?php
session_start();
require("preview.php");

location("header: edit.php?url=" . $url);
?>