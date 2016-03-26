<?php session_start(); ?>  

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
<title></title>  
<link type="text/css" rel="stylesheet" href="style.css">  



<div class="content">  
	<form name="myform" method="post" action="register_sql.php">  
		
		<fieldset style="border:2px solid goldenrod;">  
			
			<legend><font color="#12768E"><b>Form Register:</b></font></legend>  
			<div id="register">  
				<div>  
					<label for="username">Username:</label>  
					<input name="username" id="user" type="text">  
					<font color="red">*</font>  
				</div>    
				<div>  
					<label for="password">Password:</label>  
					<input name="password" id="pass" type="password">  
					<font color="red">*</font>  
				</div>  
				<div>  
					<label for="password_cf">Password confirm:</label>  
					<input name="password_cf" id="pcf" type="password">  
					<font color="red">*</font>  
				</div>  
				<div>  
					<label for="email">Emailaddress:</label>  
					<input name="emailaddress" id="email" type="text">  
					<font color="red">*</font>  
				</div>  
				<div>  
					<label for="citizenid">CitizenID :</label>  
					<input name="citizenid" id="citizenid" type="text"> 
					<font color="red">*</font>  
				</div> 
				<div>  
					<input id="submit" value="Submit" name="submit"  
					style="margin-left:300px;background:#3B59A8;border:1px solid #000;  
					color:#ffffff;font-weight:bold;" type="submit">  
				</div>  
			</div>   
		</fieldset>  
		
	</form>  
</div>  