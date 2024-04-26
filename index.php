<?php
declare(strict_types=1);
include "autoload.php";

use classes\User;

$u = new User();

$u->checkUser('Jon', '456');
$u->checkUserMob('Jack', '123');