<?php
declare(strict_types=1);

namespace traits;
trait MobileUserAuthentication {
    private string $loginMobApp = 'Jack';
    private string $passwordMobApp = '123';

    public function checkUserMob(string $login, string $pass) {
        if($login === $this->loginMobApp && $pass === $this->passwordMobApp) {
            echo "user mobile App".PHP_EOL;
        } else {
            echo "Login or Password is wrong".PHP_EOL;
        }
    }
}