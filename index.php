<?php
class MyClass
{
    public function __construct(array $daiTaoLao)
    {
        var_dump($daiTaoLao);
        // var_dump($daiTaoLao);
    }

    public function __destruct()
    {
        // echo "thực thi khi dối tượng bị huỷ";
    }

    public function __set($key, $value)
    {
        echo "key: " . $key = "value: " . $value;
    }

    public function __get($key)
    {
        echo "value: $key";
    }

    public function __isset($name)
    {
        echo "name: $name";
    }

    public function _unset($key)
    {
    }

    public function __call($method, $params)
    {
        echo $method;
        var_dump($params);
    }

    public function __callStatic($method, $params)
    {
        echo $method;
    }

    public function __toString(){
        echo "toString";
    }

    public function __invoke($name) {
        echo $name;
    }
}

$allZones = array(
    'userName'    =>  "Hoàng Phi Đại",
    'userEmail'   =>  "fdai3105@gmail.com"
);
$hello = new MyClass($allZones);
$hello->__invoke("Dai");
