<?php
declare(strict_types=1);

namespace classes;

use traits\AppUserAuthentication;
use traits\MobileUserAuthentication;

class User 
{

    use MobileUserAuthentication;
    use AppUserAuthentication {
        AppUserAuthentication::checkUser insteadof MobileUserAuthentication;
        MobileUserAuthentication::checkUser as checkUserM;
    }
    
};