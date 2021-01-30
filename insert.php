<? php
$empid= $_POST['empid'];
$name=$_POST['name'];
$birthday=$_POST['birthday'];
$address=$_POST['address'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$date=$_POST['date'];
$pic=$_POST['pic'];

if(!empty($empid) || !rmpty($name)|| !empty($birthday)|| !empty($address)|| !empty($country) || !empty($state)|| !empty($city)|| !empty($date)|| !empty($pic))
{
    $host="local host";
    $db="root";
    $dbpass="";
    $dbname="company";


    $conn=new mysqli($host, $db,$dbpass,$dbname);

}
else
{
    die();
}
?>