<?php


namespace testing;

class Client
{
    public function testing() {
        (new Lib())->testing();
        echo 'client pass' . PHP_EOL;
    }
}
