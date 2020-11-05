<?php
class MyClass {
    public function __construct(array $daiTaoLao) {
        var_dump($daiTaoLao);
        // var_dump($daiTaoLao);
    }

    public function __destruct() {
        echo "thực thi khi dối tượng bị huỷ";
    }
}

$allZones = array(
    'userName'    =>  "Hoàng Phi Đại",
    'userEmail'   =>  "fdai3105@gmail.com"
);
$hello = new MyClass($allZones);
// $hello->__destruct();