<?php



$data=array();


$seat=$_REQUEST['seat'];
$bus=$_REQUEST['bus'];
$arry=explode(",",$seat);

for($i=0;$i<count($arry);$i++)
{
    //echo $arry[$i];
    $sql="INSERT INTO seats(seat_no,bus_id,user_id) VALUES('$arry[$i]','$bus_id','$user_id')";
    $results = mysqli_query($conn, $sql);

}



$result=array("msg"=>"seat booked successfully");
    array_push($data, $result);

echo json_encode($data);




?>

