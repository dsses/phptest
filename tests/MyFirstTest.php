<?php
use PHPUnit\Framework\TestCase;
require "../Human.php";

class HumanTest extends TestCase {

    public function testGetName() {

        $hu = new Human("sato");
        $this->assertEquals("sato", $hu->getName());
    }
}


