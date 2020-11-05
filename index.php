<?php
class MyClass {
    public function __construct(array $daiTaoLao) {
        echo count($daiTaoLao);
        var_dump($daiTaoLao);
    }

    public function __destruct() {}
}

$allZones = array(
    'userName'    =>  "Hoàng Phi Đại",
    'userEmail'   =>  "fdai3105@gmail.com"
);
$hello = new MyClass($allZones);
