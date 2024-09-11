<?php

$servername = "127.0.0.1";  // Địa chỉ IP của máy chủ MySQL
$username = "root";         // Tên người dùng
$password = "";             // Mật khẩu của tài khoản (để trống nếu không có)
$database = "melody";       // Tên cơ sở dữ liệu
$port = 3307;               // Cổng MySQL

// Tạo kết nối với thông tin chi tiết
$dbh = mysqli_connect($servername, $username, $password, $database, $port);

// Kết nối tới MySQL server
if (!$dbh) {
    die("Unable to connect to MySQL: " . mysqli_connect_error());
}

// Tạo bảng nếu nó chưa tồn tại
$create_table_sql = "CREATE TABLE IF NOT EXISTS `my_contacts` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `full_names` VARCHAR(255) NOT NULL,
    `gender` VARCHAR(6) NOT NULL,
    `contact_no` VARCHAR(75) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `country` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;";

if (!mysqli_query($dbh, $create_table_sql)) {
    die("Error creating table: " . mysqli_error($dbh));
}

// Chèn dữ liệu vào bảng
echo "Chèn dữ liệu vào bảng"."<br>";
$insert_data_sql = "INSERT INTO `my_contacts` (`full_names`, `gender`, `contact_no`, `email`, `city`, `country`) VALUES
    ('Zeus', 'Male', '111', 'zeus@olympus.mt.co', 'Agos', 'Greece'),
    ('Anthena', 'Female', '123', 'anthena@olympus.mt.co', 'Athens', 'Greece'),
    ('Jupiter', 'Male', '783', 'jupiter@planet.pt.co', 'Rome', 'Italy'),
    ('Venus', 'Female', '987', 'venus@planet.pt.co', 'Mars', 'Italy');";

if (!mysqli_query($dbh, $insert_data_sql)) {
    die("Error inserting data: " . mysqli_error($dbh));
}

// Câu lệnh SQL để chèn dữ liệu mới
$sql_stmt = "INSERT INTO `my_contacts` (`full_names`, `gender`, `contact_no`, `email`, `city`, `country`) VALUES ('Poseidon', 'Mail', '541', 'poseidon@sea.oc', 'Troy', 'Ithaca')";

// Thực thi câu lệnh SQL
$result = mysqli_query($dbh, $sql_stmt);

if (!$result) {
    die("Adding record failed: " . mysqli_error($dbh));
} else {
    echo "chèn dữ liệu thành công"."<br>";
}

// Câu lệnh SQL để cập nhật dữ liệu
echo "Cập nhật dữ liệu vào bảng"."<br>";
$sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785', `email` = 'poseidon@ocean.oc' WHERE `id` = 5";

// Thực thi câu lệnh SQL
$result = mysqli_query($dbh, $sql_stmt);

if (!$result) {
    die("Updating record failed: " . mysqli_error($dbh));
} else {
    echo "cập nhật dữ liệu thành công"."<br>";
}
// Câu lệnh SQL để xóa dữ liệu
echo "Xóa dữ liệu "."<br>";
$id = 15; 

$sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
// Câu lệnh SQL Delete

$result = mysqli_query($dbh,$sql_stmt); 
// Thực thi câu lệnh SQL

if (!$result) {
    die("Deleting record failed: " . mysqli_error());
    // Thông báo lỗi nếu thực thi thất bại 
} else {
    echo "xóa $id thành công"."<br>"."<br>";
}

mysqli_close($dbh); // Đóng kết nối CSDL





//PDO
echo"PDO"."<br>";
try {

    // Tạo kết nối PDO
    $pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=melody', 'root', $password);
    $action = 'display'; 

    if ($action == 'add') {
        // Thêm dữ liệu
        $sql = "INSERT INTO `my_contacts` (`full_names`, `gender`, `contact_no`, `email`, `city`, `country`) 
                VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':full_names', $full_names);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':contact_no', $contact_no);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':country', $country);

        // Giá trị cần thêm
        $full_names = 'Poseidon';
        $gender = 'Male';
        $contact_no = '541';
        $email = 'poseidon@sea.oc';
        $city = 'Troy';
        $country = 'Ithaca';

        $stmt->execute();
        echo "Poseidon has been successfully added to your contacts list<br>";
    
    } elseif ($action == 'update') {
        // Cập nhật dữ liệu
        $sql = "UPDATE `my_contacts` SET `contact_no` = :contact_no, `email` = :email WHERE `id` = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':contact_no', $contact_no);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);

        // Giá trị cần cập nhật
        $contact_no = '785';
        $email = 'poseidon@ocean.oc';
        $id = 5;

        $stmt->execute();
        echo "ID number 5 has been successfully updated<br>";

    } elseif ($action == 'delete') {
        // Xóa dữ liệu
        $sql = "DELETE FROM `my_contacts` WHERE `id` = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);

        // Giá trị cần xóa
        $id = 5;

        $stmt->execute();
        echo "ID number 5 has been successfully deleted<br>";

    } elseif ($action == 'display') {
        // Hiển thị dữ liệu
        $sql = "SELECT * FROM `my_contacts`";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Full Name: " . $row['full_names'] . "<br>";
            echo "Gender: " . $row['gender'] . "<br>";
            echo "Contact No: " . $row['contact_no'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "City: " . $row['city'] . "<br>";
            echo "Country: " . $row['country'] . "<br><br>";
        }
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null; // Đóng kết nối
?>
