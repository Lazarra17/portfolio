<?php
session_start();
/**
 * @author Nicoyah
 * @copyright 2016
 */

session_destroy();
session_unset();

header("Location: ../menu.php?signout");

?>