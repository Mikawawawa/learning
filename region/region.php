    <?php
        $region=json_decode(file_get_contents('./region.json'),true);
        
        function getIndex($province){
            $index=[
                '北京市','天津市','河北省','山西省', '内蒙古','辽宁省','吉林省','黑龙江省','上海市', '江苏省','浙江省','安徽省','福建省','江西省','山东省', '河南省','湖北省','湖南省','广东省','广西','海南省', '重庆市','四川省','贵州省','云南省','西藏','陕西省','甘肃省','青海省','宁夏','新疆','台湾省','澳门','香港',
            ];
            return array_search($province,$index);
        }

        function getName($region){
            $province=[];
            foreach($region as $row){
                array_push($province,$row['name']);
            }
            return $province;
        }

        function getCity($region,$province){
            $region=$region[getIndex($province)];
            return getName($region['city']);
        }

        function getProvince($region){
            return getName($region);
        }

        function getArea($region,$province,$city){
            $index=getProvince($region,$province);
            $region=$region[array_search($province,$index)]['city'];
            $index=getName($region);
            
            $region=$region[array_search($city,$index)];
            return $region['area'];
        }


        // print_r(json_encode($cmd));
        $cmd=json_decode(file_get_contents("php://input"),true)['cmd'];

        // $cmd=split('/',$cmd);
        // echo $cmd;
        if($cmd=='/'){
            echo json_encode(getProvince($region),JSON_UNESCAPED_UNICODE );
        }else{
            $cmd=explode('/',$cmd);
            if(count($cmd)==2){
                echo json_encode(getCity($region,$cmd[1]),JSON_UNESCAPED_UNICODE);
            }else{
                echo json_encode(getArea($region,$cmd[1],$cmd[2]),JSON_UNESCAPED_UNICODE);
            }
        }

        // print_r($cmd);
        
        
        // print_r(getCity($region,'四川省'));
        // print_r(getProvince($region));
        // print_r(getArea($region,'四川省','成都市'));
    ?>