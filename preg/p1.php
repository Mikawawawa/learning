<?php
    $preg=["/\A[\w]{1,}@[\w]{1,}/","/[\+86]{0,1}[0-9]{3,4}[\-]{0,1}[0-9]{7}/","/[\S]{8,16}/","/^#[0-9a-fA-F]{6}$/","/^\d{4}$/"];
    $email=["abcd@outlook.com","@qq.com","@","abcd@","_)(*&^%$#@qq.com"];
    $telephone=["010-87891234","0571-8765342","0791-12345678","18607084321","+8613934565432"];
    $password=["abasdf32456","{:?:123456345","dfnfw3456.","123456"];
    $color=["#4f3a45","123456","asdfgh"];
    $num="134567654321345654323456";

    // 邮件
    foreach($email as $content){
        if(preg_match($preg[0],$content,$matches)){
            echo "匹配成功".$content."\n";
        }else{
            echo "匹配失败\n";
        }
    }

    // 电话
    foreach($telephone as $content){
        if(preg_match($preg[1],$content,$matches)){
            echo "匹配成功".$content."\n";
        }else{
            echo "匹配失败\n";
        }
    }    

    // 密码
    foreach($password as $content){
        if(preg_match($preg[2],$content,$matches)){
            echo "匹配成功".$content."\n";
        }else{
            echo "匹配失败\n";
        }
    }      

    // 颜色
    foreach($color as $content){
        if(preg_match($preg[3],$content,$matches)){
            echo "匹配成功".$content."\n";
        }else{
            echo "匹配失败\n";
        }
    }    
    
    // 数字
    print_r(preg_split($preg[4],$num),"preg_split_no_empty");
    echo implode(" ",preg_split($preg[4],$num))
?>