<?php
declare(strict_types=1);

namespace classes;



use traits\AppUserAuthentication;
use traits\MobileUserAuthentication;


class User {
    use AppUserAuthentication;
    use MobileUserAuthentication;
}