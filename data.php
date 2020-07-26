<?php
try{
	$db = new mysqli("db50ng-data.io","dbu624438","","dbs344110");
	

}
catch(Exception $exc){
	echo $exc->getTraceAsString();

}
if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Telephone']) && isset($_POST['Address']) && isset($_POST['Message']))
  {
     $Name = $_POST['Name'];
     $Email = $_POST['Email'];
     $Telephone = $_POST['Telephone'];
     $Address = $_POST['Address'];
     $Message = $_POST['Message'];
     $is_insert = $db->query("INSERT INTO `messages`(`Name`, `Email`, `Telephone`, `Address`, `Message`) VALUES ('$Name','$Email','$Telephone','$Address','$Message')");
     if($is_insert ==TRUE){
                            echo"<script>alert('MESSAGE SENT SUCESSFULLY'); location.href='mail.html';</script>";
	                       exit();
    }
}
?>
