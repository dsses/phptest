<?php
class Human {
    private $_name;
    public function Human($name) {
        $this->_name = $name;
    }

    public function getName() {
        return $this->_name;
    }
}


