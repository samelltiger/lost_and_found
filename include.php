<?php
session_start();
define("ROOT",dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.get_include_path());

require_once 'images.func.php';
require_once 'mysql.func.php';
require_once 'array.func.php';
require_once 'upload.func.php';

