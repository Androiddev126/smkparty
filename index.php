<?php
$n=$_post['name'];
$i=$_post['voterid'];
$w=$_post['ward'];
$t=$_post['taluk'];
$v=$_post['village'];
$d=$_post['district'];
$p=$_post['phone'];

$conn =  new mysqli_connect('https://androiddev126.github.io/smkparty/','sql12751437','Ghiuf9eTM9','sql12751437');
$stmt = $conn-› prepare("insert into registration(Name,Voter_Id,ward,taluk,village,district,phone) values('$n','$i','$w','$t','$v','$d','$p')";
$r=mysqli_query($con,$sql);	
	if ($r)
	{    echo "MEMBERS ADDED SUCCESS";
	}
	else
	{    echo " MEMBERS NOT ADDED";
	}	
	
?>
