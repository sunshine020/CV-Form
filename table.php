<?php
include('cnfig.php');
$stdinfo="CREATE TABLE IF NOT EXISTS stdinfo(id int unsigned not null AUTO_INCREMENT PRIMARY key,
    first_name varchar(50) not null,
     last_name varchar(50) not null,
    father_name varchar(50) not null,
     mother_name varchar(50) not null,
     dob varchar(50) not null,
    blood varchar(10) not null,
    religion varchar(50) not null,
    gender varchar(2) not null,
    marrid varchar(10) not null,
    national_id varchar(50) not null,
    email varchar(255) not null,
    contact varchar(20) not null,
    address text not null,
    s_institute varchar(255) not null,
    s_group varchar(50) not null,
    s_pass varchar(20) not null,
    s_result varchar(20)  not null,
    s_board varchar(20) not null,
    h_institute varchar(255) not null,
    h_group varchar(50) not null,
    h_pass varchar(20) not null,
    h_result varchar(20)  not null,
    h_board varchar(20) not null,
    picture varchar(4) not null,
    date date not null,
    UNIQUE KEY(email)

)";
$result=mysqli_query($myconn,$stdinfo);
if($result===TRUE)
{
	echo"student info table created";
}
else
{
		echo"student info table not created";

}

?>
