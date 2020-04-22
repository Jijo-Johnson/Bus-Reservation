<?php

include('db.php');
session_start();

if(($_REQUEST['bus']=='b'))

{
        class search
        {
            public $msg ="";
            public $seats ="";
        }
        echo "[";
        
        $obj = new search();
        
        $busno = $_REQUEST['busno'];
        $datepicker = $_REQUEST['datepicker'];
        
        $flag=0;
        
        $data="select busno,datepicker,scheduleno from add_bus_shedule where busno='$busno' && datepicker='$datepicker'";
        //echo "select busno,datepicker,scheduleno from add_bus_shedule where busno='$busno' && datepicker='$datepicker'";
        $q=mysqli_query($connect,$data) or die(mysqli_error());
          
        while($row=mysqli_fetch_assoc($q))
        {
             $shno =$row['scheduleno'];
         $data1="select * from cancelledbuses where sheduleno='$shno'";
        //echo "<br>select * from cancelledbuses where sheduleno='$shno'";
         $q1=mysqli_query($connect,$data1) or die(mysqli_error());
          if(mysqli_fetch_assoc($q1))
          {
 $obj->msg='fail';
          }
            else
            {
                $obj->msg='success';
            if($flag==0)
            {
                $flag++;
            }
            else
            {
                echo ",";
            }
            $aa=$row['busno'];
            
            
            $data5="select seats from add_bus where busno='$aa' && approve='1'";
            $q1=mysqli_query($connect,$data5) or die(mysqli_error());
            while($row1=mysqli_fetch_assoc($q1))
            {
                 $obj->seats=$row1['seats'];
            }
           
        }
         echo json_encode($obj);
        }
        
        echo "]";  
        
 }
 
 
 /************************************************************************************************/

 
elseif(($_REQUEST['bus']=='a'))
{
    
    class fail
    {
        public $msg ="";
        public $source="";
        public $destination="";
        public $datepicker="";
        public $scheduleno="";
    }
    echo "[";
    
    $obj = new fail();
    
    $busno = $_REQUEST['busno'];
    
    $flag=0;
    
    $data="select * from add_bus_shedule where busno='$busno'";
    $q=mysqli_query($connect,$data) or die(mysqli_error());
    
    while($row=mysqli_fetch_assoc($q))
    {
        if($flag==0)
        {
            $flag++;
        }
        else
        {
            echo ",";
        }
        
        $obj->source =$row['source'];
        $obj->destination =$row['destination'];
        $obj->datepicker =$row['datepicker'];
        $obj->scheduleno=$row['scheduleno'];
        
        echo json_encode($obj);
    }
    
    echo "]";
    
}

/*******************************************************************************************************/


elseif(($_REQUEST['bus']=='c'))
{
    class again
    {
        public $stopname="";
    }
    echo "[";
    
    $obj = new again();
    
    $scheduleno = $_REQUEST['scheduleno']; 
    $flag=0;
    
    $data="select * from add_bus_stop where scheduleno='$scheduleno'";
    $q=mysqli_query($connect,$data) or die(mysqli_error());
  
    while($row=mysqli_fetch_assoc($q))
    {
        if($flag==0)
        {
            $flag++;
        }
        else
        {
            echo ",";
        }
        
        $obj->stopname=$row['stopname'];
        echo json_encode($obj);
    }
    
    echo "]"; 
}


/******************************************************************************************************/


elseif(($_REQUEST['bus']=='book'))
{
    class nohope
    {
        public $msg ="";
    }
    echo "[";
    
    $obj = new nohope();
    
    $iid=$_SESSION['uid'];
    $seatno=$_REQUEST['seatno'];
    $from=$_REQUEST['from'];
    $to=$_REQUEST['to'];
    $scheduleno=$_REQUEST['scheduleno'];
    
    $dat="INSERT INTO booking(user_id,seatno,source,destination,scheduleno) VALUES ('$iid','$seatno','$from','$to','$scheduleno')";
    $data=mysqli_query($connect,$dat) or die(mysqli_error());
    
    if($dat==true)
    {
        $obj->msg="success";
    }
    else 
    {
        $obj->msg="failed";
    }
    
    echo json_encode($obj);
    echo "]";
}
   

/**************************************************************************************************/



elseif(($_REQUEST['bus']=='no'))
{
    
    class loozer
    {
        public $msg ="";
    }
    echo "[";
    
    $obj = new loozer();
    
    $shdleno=$_REQUEST['shdleno'];
    
    $flag=0;
    
    $data="select * from booking where scheduleno='$shdleno'";
    $q=mysqli_query($connect,$data) or die(mysqli_error());
   
    while($row=mysqli_fetch_assoc($q))
    {
        $obj->msg="success";
        if($flag==0)
        {
            $flag++;
        }
        else
        {
           // echo ",";
        }
        $obj->seatno[]=$row['seatno'];
        
    }
    echo json_encode($obj);
    echo "]"; 
}



/****************************************************************************************************************************/



elseif(($_REQUEST['bus']=='can'))
{
    
    class can
    {
        public $seatno;
		public $source;
		public $destination;
		public $scheduleno;
    }
    echo "[";
    
    $obj = new can();
	$id=$_SESSION['uid'];
    
    $flag=0;
    
    $data="select * from booking where user_id='$id'";
    $q=mysqli_query($connect,$data) or die(mysqli_error());
   
    while($row=mysqli_fetch_assoc($q))
    {
        if($flag==0)
        {
            $flag++;
        }
        else
        {
            echo ",";
        }
        $obj->seatno=$row['seatno'];
		$obj->source=$row['source'];
		$obj->destination=$row['destination'];
		$obj->scheduleno=$row['scheduleno'];
		
        echo json_encode($obj);
    }
    
    echo "]"; 
}

/**********************************************************************************************************************************/


else if ($_REQUEST['bus']=='del')
{
    class isco
    {
        public $msg;
    }
    $obj = new isco();
    
    echo "[";
    
    $id=$_SESSION['uid'];
    $scheduleno=$_REQUEST['btn_id'];
    $seatno=$_REQUEST['bt_id'];
    
    $query=("DELETE FROM booking WHERE user_id='$id' && scheduleno='$scheduleno' && seatno='$seatno'");
    $gt=mysqli_query($connect,$query) or die(mysqli_error());
    
    if($gt==true)
    {
        $obj->msg="success";
    }
    else
    {
        $obj->msg="failed";
    }
    echo json_encode($obj);
    
    echo "]";
}
?>