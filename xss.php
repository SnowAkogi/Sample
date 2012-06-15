<?php
    function check($arr){
            $ret = $arr;
            foreach($arr as $key => $val){
                    $ret[$key] = htmlspecialchars($val);
                }
                return $ret;
        }
    $param = check($_POST);

    if(isset($param["yourname"])){
            echo "Your name is [" . $param["yourname"] . "]<br>";
        }
    if(isset($param["yourweight"])){
            echo "Your weight is [" . $param["yourweight"] . "]<br>";
        }
    if(isset($param["yourtall"])){
            echo "Your tall is [" . $param["yourtall"] . "]<br>";
        }
        $weight=doubleval($param["yourweight"]);
        $tall=doubleval($param["yourtall"]);
        $BMI=$weight/($tall*$tall);
            echo "Your BMI is [" . $BMI . "]<br>";
        if($BMI<18.5){
            echo "You thin <br>";
        }
        elseif($BMI>=18.5 && $BMI < 25.0){
            echo "You normal <br>";
            }
        elseif($BMI>= 25.0){
            echo "You fat <br>";
        }
?>
