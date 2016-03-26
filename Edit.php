<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
<title>Register</title>  
<link type="text/css" rel="stylesheet" href="style.css">  


<div class="content">  
	<fieldset style="border:2px solid goldenrod;">  
		<legend><font color="#12768E"><b>Form Register:</b></font></legend>  
		
		<?php 
		require('routeros-api-master/routeros_api.class.php');

		$API = new RouterosAPI();


		if ($API->connect('192.168.40.1', 'admin', '')) {  

// $username = $_GET['username'];  
// $password = $_GET['password'];  
// $password_cf = $_GET['password_cf'];  
// $emailaddress = $_GET['emailaddress']; 
// $citizenid = $_GET['citizenid']; 

			$id = $_GET ['id'];
 // print($id);
			$API -> write('/ip/hotspot/user/print',false);
			$API -> write("?.id=".$id,true);

 //  // // show me what you got
 //  //  $API->write('/ip/hotspot/user/print');
 //   $READ = $API->read(false);
 //   $ARRAY = $API->parseResponse($READ);
	//  print_r($ARRAY);

  // $API -> write('/ip/hotspot/user/edit',array( 
 	//   "name"     => $username,
  //     "password" => $password,
  //     "email" => $emailaddress));

  // // show me what you got
  //  $API->write('/ip/hotspot/user/print');
			$READ = $API->read(false);
			$ARRAY = $API->parseResponse($READ);
	 // print_r($ARRAY);

 // $a= $API->comm ('/ip/hotspot/user/print');
// foreach ($a as $key => $value) {
// 	if ($key <1) continue;
			echo "<form name=\"myform\" method=\"post\" action=\"editform.php\">";
			echo 		"<div id=\"register\"> ";
			echo		"<div>";
			// echo		"<label for=\"id\">ID:</label>";
			echo 		"<input name=\"id\" id=\"id\" type=\"hidden\" value=\"".$id."\" >";
			echo 		"</div>";
			echo		"<div>";
			echo		"<div>";
			echo		"<label for=\"username\">Username:</label>";
			echo 		"<input name=\"username\" id=\"user\" type=\"text\" value=\"".$ARRAY[0]['name']."\">";
			echo 		"</div>";
			echo		"<div>";
			echo 		"<label for=\"password\">Password:</label>";
			echo 		"<input name=\"password\" id=\"pass\" type=\"password\" value=\"".$ARRAY[0]['password']."\">";
			echo 		"</div>";
			echo		"<div>";
			echo 		"<label for=\"password_cf\">Password confirm:</label> ";
			echo 		"<input name=\"password_cf\" id=\"pcf\" type=\"password\">  ";
			echo 		"</div>";
			echo		"<div>";
			echo 		"<label for=\"email\">Emailaddress:</label> ";
			echo 		"<input name=\"emailaddress\" id=\"email\" type=\"text\"value=\"".$ARRAY[0]['email']."\">";
			echo 		"</div>";
			echo		"<div>";
			echo 		"<label for=\"citizenid\">CitizenID :</label>   ";
			echo 		"<input name=\"citizenid\" id=\"citizenid\" type=\"text\"value=\"".$ARRAY[0]['comment']."\">";
			echo 		"</div>";
			echo		"<div>";
			echo "<input id=\"submit\" value=\"Update\" name=\"submit\"  
			style=\"margin-left:300px;background:#3B59A8;border:1px solid #000;  
			color:#ffffff;font-weight:bold;\" type=\"submit\">"; 
			
			echo "<div>";
		}

		$API->disconnect();

		?> 
	</fieldset>  
</div>  