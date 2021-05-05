<?php
session_start(['cookie_lifetime' => 86400,]);

session_destroy();
header('location: index.php?status=true&method=cleancart');