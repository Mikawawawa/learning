<?php
// 定义学生信息类Stu，内容私有属性：学号，姓名、性别、班级。
// 定义一个构造方法，目的实现上面四个属性的初始化赋值操作。
// 定义方法：__set __get  __unset __isset ，并发挥其作用。
// 定义一个获取信息的方法getinfo方法。
// 定义方法：__call( ); 并发挥其作用
class Stu{
    private $id;
    private $name;
    private $sex;
    private $classroom;

    function __construct($id,$name,$sex,$classroom){
        $this->id=$id;
        $this->name=$name;
        $this->sex=$sex;
        $this->classroom=$classroom;
    }
    function __toString(){            
        $props=[];
        $props["id"]=$this->id;
        $props["name"]=$this->name;
        $props["sex"]=$this->sex;
        $props["classroom"]=$this->classroom;
        return json_encode($props);
    }

    function getinfo(){
        $props=[];
        echo $this;
        $props["id"]=$this->id;
        $props["name"]=$this->name;
        $props["sex"]=$this->sex;
        $props["classroom"]=$this->classroom;
        return json_encode($props);
    }

    function __set($props,$value){
        $this->$props=$value;
    }

    function __get($props){
        return $this->$props;
    }

    function __isset($props){
        return isset($this->$props);
    }

    function __unset($props){
        unset($this->$props);
    }

    function __call($props,$arguments){
        echo("you call a unset method ".$props."()");
    }
}

$xiaoming=new Stu(123,"xiaoming","male",217);
echo $xiaoming->bucunzaide();
?>