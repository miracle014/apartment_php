<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="new_dormitory";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$datenow = date('my');
$lastmonth = date('my', strtotime('-1 months'));
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_query($conn, "SET NAMES UTF8");
$sql = "INSERT INTO a_1217 (numroom,roomrate,waterunit,electricityunit,net,total)
VALUES 
('101','2800','760','6093','0','0'),
('102','2500','643','4549','0','0'),
('103','2500','623','5263','0','0'),
('104','2500','565','4724','0','0'),
('105','2400','913','5262','0','0'),
('106','2400','541','4874','200','0'),
('107','2500','735','5123','200','0'),
('201','2700','623','5644','0','0'),
('202','2500','448','4139','0','0'),
('203','2500','619','5086','0','0'),
('204','2400','366','4752','0','0'),
('205','2500','434','3096','0','0'),
('206','2400','530','7319','0','0'),
('207','2500','761','6642','0','0'),
('2101','2400','599','3552','0','0'),
('2102','2500','643','3501','0','0'),
('2103','2400','377','1487','0','0'),
('2104','2500','383','3318','0','0'),
('2105','2400','428','2575','0','0'),
('2106','2500','286','2144','0','0'),
('2201','2500','619','2460','0','0'),
('2202','2500','444','2279','200','0'),
('2203','2500','320','1687','0','0'),
('2204','2500','443','2878','0','0'),
('2205','2400','344','2069','0','0'),
('2206','2500','782','2223','0','0')
";
$result = $conn->query($sql);
 

mysqli_close($conn);
?>