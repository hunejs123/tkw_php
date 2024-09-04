<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 3</title>
</head>
<body>
    <?php 
        $a = 6;
        $b = 7;
        $a++;
        --$b;
        echo "giá trị biến a: " . $a . "<br>";
        echo "giá trị b: " . $b."<br>";
        echo "a+b = ".$a+$b . "<br>";
        echo $a == $b;
        echo "bài 1"."<br>";
        function chuvihcn($x,$y){
            $z = ($x + $y )*2;
            return $z;
        }
        echo "chu vi hcn có chiều dài là 5 và chiều rộng là 1= " . chuvihcn(5,1) . "<br>";
        echo "bài 2"."<br>";
        function giaiptbac1($c, $d){
            if($c!=0){
                $e=(-$d)/$c;
                return $e;
            }else if($c==0&&$d==0){
                return "vô số nghiệm";
            }else{
                return "vô nghiệm";
            }
            
        }
        echo"phương trình bậc 1: 5x+6=0 => x = " . giaiptbac1(5,6);
        echo "bài 3"."<br>";
        $arr = array(
            "1"=>"hưng",
            "2"=>"hưng2"
        );
        $ab = Array_rand($arr);
        $ar = $arr[$ab];
        echo $ab . $ar
    ?>
</body>
</html>