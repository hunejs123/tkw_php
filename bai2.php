<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $y = 3;
        echo pow($y,3)."</br>";
        $x = "hello world";
        $z = "HI";
        echo "bài 1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen()."."</br>";
        echo strlen($x)."</br>";
        echo "bài 2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count()."."</br>";
        echo str_word_count($x)."</br>";
        echo "bài 3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev()."."</br>";
        echo strrev($x)."</br>";
        echo "bài 4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos()."."</br>";
        echo strpos($x,"world")."</br>";
        echo "bài 5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace()."."</br>";
        echo str_replace("world", "hune", $x)."</br>";
        echo "bài 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp()."."</br>";
        echo strncmp($x,$y,3)."</br>";
        echo "bài 7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper()."."</br>";
        $x2 = strtoupper($x);
        echo $x2."</br>";
        echo "bài 8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower()."."</br>";
        $z2 = strtolower($z);
        echo $z2."</br>";
        echo "bài 9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords()."."</br>";
        echo ucwords($x)."</br>";
        echo "bài 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim()."."</br>";
        echo trim($x)."</br>";
        echo "bài 11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()."."</br>";
        echo ltrim($x,"h")."</br>";
        echo "bài 12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim()."."</br>";
        echo rtrim($x,"world")."</br>";
        echo "bài 13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode()."."</br>";
        $arr = explode(" ",$x);
        print_r($arr);
        echo "</br>";
        echo "bài 14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()"."</br>";
        print_r(implode(" ",$arr));
        echo "</br>";
        echo "bài 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad()."."</br>";
        echo str_pad($x,16,": TMU",STR_PAD_RIGHT)."</br>";
        echo "bài 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()."."</br>";
        echo "Chuỗi '$x' kết thúc bằng ".strrchr($x, "d")."</br>";
        echo "bài 17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()."."</br>";
        echo "Chuỗi '$x' có chứa ".strstr($x, "hello")."</br>";
        echo "bài 18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()"."</br>";
        echo "Chuỗi sau khi thay thế: " . preg_replace('/[^a-zA-Z0-9]/', $z, $x);
        echo "bài 19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int()."."</br>";
        echo is_int($y)."</br>";
        echo "bài 20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()."."</br>";
        $email = "test@gmail.com";
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Địa chỉ email hợp lệ."; 
        } else {
            echo "Địa chỉ email không hợp lệ.";
        }
    ?>
</body>
</html>