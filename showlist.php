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

  // // show me what you got
   // $API->write('/ip/hotspot/user/print');
   // $READ = $API->read(false);
   // $ARRAY = $API->parseResponse($READ);
	 // print_r($ARRAY);

		}
		echo "<table width=\"100%\">";
		echo	"<tr>";
		echo 		"<td>ID</td>";
		echo		"<td>Name</td>";
		echo		"<td>Email</td>";
		echo 		"<td>Action</td>";
		echo	"</tr>";


		$a= $API->comm('/ip/hotspot/user/print');
		foreach ($a as $key => $value) {
			if ($key < 1) continue;
			echo"<tr>";
			echo"<td>";
			echo ($value['.id']);
			echo "</td>";
			echo"<td>";
			echo ($value['name']);
			echo "</td>";
			echo "<td>";
			echo ($value['email']);
			echo "</td>";
			echo "<td>";
			echo "<a href=\"Edit.php?id=".$value['.id']."\">  
			<input type='button'value='update' style='background:#3B59A8;  
			border:1px solid #000;color:#ffffff;font-weight:bold;'></a>  </center>";
			echo "</td>";
			echo "</tr>";
		}	
		echo"</table>";
		$API->disconnect();
		?> 
	</fieldset>  
</div>  