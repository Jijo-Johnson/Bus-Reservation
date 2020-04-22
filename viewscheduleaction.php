<?php 

include('db.php');
session_start();

if($_REQUEST['act']=='give')
{
    class deadpool
    {
        public $stopname;
        public $scheduledtime;
        public $actualtime;
        public $id;
    }
    
    $object = new deadpool();
    echo "[";
    $scheduleno=$_REQUEST['scheduleno'];
   
    $flag=0;
    $data3="select * from add_bus_stop where scheduleno='$scheduleno'";
    $td=mysqli_query($connect,$data3) or die(mysqli_error());
    while($md=mysqli_fetch_array($td))
    {
        
        if($flag==0)
        {
            $flag++;
        }
        else
        {
            echo ",";
        }
        
        $object->stopname=$md['stopname'];
        $object->scheduledtime=$md['scheduledtime'];
        $object->actualtime=$md['actualtime'];
        $object->id=$md['id'];
        
        echo json_encode($object);
        
    }
    
    echo "]";
}


/*********************************************************************************************/


else if($_REQUEST['act']=='rvd')
{
    class ab
    {
        public $msg="";
    } 
    $obj = new ab();
    echo "[";
      
    $scheduleno=$_REQUEST['scheduleno'];
    $at=$_REQUEST['at'];
    
    $array1 = json_decode($at);
    
    foreach ($array1 as $value1)
    {
        $at = $value1->at;
        $id = $value1->id;
        //echo $at;
        $new="UPDATE add_bus_stop SET actualtime='$at',status='1' WHERE id='$id'";
      
        $dt=mysqli_query($connect,$new) or die(mysqli_error());
        
        if($dt)
        {
            $message = "Actual Time Updated Successfully";
            $obj->log="y";    
        }
        else
        {
            $message = "Actual Time Updated Failed";
            $obj->log="n";   
        }
        
        $obj->msg = $message;
    }
 
    echo json_encode($obj);
    echo "]";
}

?>