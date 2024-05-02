<?php
declare(strict_types=1);

namespace traits;
trait AppUserAuthentication {
    protected string $loginApp = 'Jon';
    protected string $passwordApp = '456';

    public function checkUser(string $login, string $pass) : void
    {
        if($login === $this->loginApp && $pass === $this->passwordApp) {
            echo "user App".PHP_EOL;
        } else {
            echo "Login or Password is wrong".PHP_EOL;
        }
    }
}