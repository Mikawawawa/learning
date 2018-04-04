<?php
// 定义一个圆这个final类：实现两个静态方法（求周长和面积方法），并测试。

    Final class Circle{
        static $pi=3.14;
        static $radius;
        function __construct($radius){
            self::$radius=$radius;
        }

        static function getSquare(){
            return pow(2,self::$radius)*self::$pi;
        }

        static function getPerimeter(){
            return 2*self::$pi*self::$radius;
        }
        function __get($props){
            return $this->$props;
        }
    }
    $blue=new Circle(3);
    echo $blue::getSquare();
    echo $blue::getPerimeter();

?>